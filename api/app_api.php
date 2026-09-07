<?php
/**
 * Talisman Online WebSuite — Mobile Universal REST API
 * 
 * Provides dynamic server discovery, authentication, role-based controls,
 * and data synchronization for the Universal Android Application.
 */

// Enable CORS for mobile app requests
error_reporting(0);
ini_set('display_errors', '0');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
header('Content-Type: application/json');

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$configPath = __DIR__ . '/../include/config.php';
if (!file_exists($configPath)) {
    echo json_encode(['status' => 'error', 'message' => 'Backend configuration missing']);
    exit;
}
require_once $configPath;

$action = $_GET['action'] ?? $_POST['action'] ?? '';
$secretKey = 'Talisman_Mobile_App_Secret_2026!@#';

// -------------------------------------------------------------
// TOKEN HELPERS
// -------------------------------------------------------------
function generateToken($payload, $secret) {
    $payload['exp'] = time() + (30 * 24 * 3600); // 30 days
    $encoded = base64_encode(json_encode($payload));
    $signature = hash_hmac('sha256', $encoded, $secret);
    return $encoded . '.' . $signature;
}

function verifyToken($token, $secret) {
    if (empty($token)) return false;
    $parts = explode('.', $token);
    if (count($parts) !== 2) return false;
    $encoded = $parts[0];
    $sig = $parts[1];
    if (hash_hmac('sha256', $encoded, $secret) !== $sig) return false;
    $data = json_decode(base64_decode($encoded), true);
    if (!$data || !isset($data['exp']) || time() > $data['exp']) return false;
    return $data;
}

function getBearerToken() {
    $headers = getallheaders();
    if (isset($headers['Authorization'])) {
        if (preg_match('/Bearer\s+(.*)$/i', $headers['Authorization'], $matches)) {
            return trim($matches[1]);
        }
    }
    return $_REQUEST['token'] ?? null;
}

function requireAuth($secret) {
    $token = getBearerToken();
    $user = verifyToken($token, $secret);
    if (!$user) {
        http_response_code(401);
        echo json_encode(['status' => 'error', 'message' => 'Unauthorized or expired session. Please log in again.']);
        exit;
    }
    return $user;
}

// -------------------------------------------------------------
// ENDPOINTS
// -------------------------------------------------------------
switch ($action) {

    // 1. SERVER INFO (Public handshake for universal server selection)
    case 'server_info':
        $activeTheme = function_exists('GetWebsiteOption') ? GetWebsiteOption('active_theme') : 'default';
        if (empty($activeTheme)) $activeTheme = 'default';

        $serverName = function_exists('GetWebsiteOption') ? GetWebsiteOption('server_name') : 'Talisman Online';
        if (empty($serverName)) $serverName = 'Talisman Online';

        $currencyName = function_exists('GetWebsiteOption') ? GetWebsiteOption('currency_name') : 'T-Points';
        $currencyShort = function_exists('GetWebsiteOption') ? GetWebsiteOption('currency_short') : 'TP';

        // Count online players
        $onlineCount = 0;
        try {
            $db_game = Connection('db_game');
            if ($db_game) {
                $q = $db_game->query("SELECT COUNT(*) FROM t_characters WHERE online = 1");
                if ($q) $onlineCount = (int)$q->fetchColumn();
            }
        } catch (Exception $e) {}

        // List all 20 themes available on this server
        $themesDir = __DIR__ . '/../themes';
        $availableThemes = [];
        if (is_dir($themesDir)) {
            $dirs = scandir($themesDir);
            foreach ($dirs as $d) {
                if ($d === '.' || $d === '..') continue;
                if (is_dir($themesDir . '/' . $d)) {
                    $jsonFile = $themesDir . '/' . $d . '/theme.json';
                    $themeMeta = file_exists($jsonFile) ? json_decode(file_get_contents($jsonFile), true) : null;
                    $availableThemes[] = [
                        'id' => $d,
                        'name' => $themeMeta['name'] ?? str_replace('_', ' ', $d),
                        'author' => $themeMeta['author'] ?? 'Talisman Studio',
                        'version' => $themeMeta['version'] ?? '2.0.0'
                    ];
                }
            }
        }

        echo json_encode([
            'status'           => 'success',
            'server_name'      => $serverName,
            'active_theme'     => $activeTheme,
            'theme_name'       => str_replace('_', ' ', $activeTheme),
            'currency_name'    => $currencyName,
            'currency_short'   => $currencyShort,
            'online_players'   => $onlineCount,
            'available_themes' => $availableThemes,
            'server' => [
                'name'             => $serverName,
                'active_theme'     => $activeTheme,
                'currency_name'    => $currencyName,
                'currency_short'   => $currencyShort,
                'online_players'   => $onlineCount,
                'status'           => 'online',
                'api_version'      => '2.0.0',
                'available_themes' => $availableThemes
            ]
        ]);
        break;

    // 2. LOGIN & AUTHENTICATION
    case 'login':
        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;

        $username = trim($body['username'] ?? '');
        $password = trim($body['password'] ?? '');
        $twoFactorCode = trim($body['totp_code'] ?? $body['2fa_code'] ?? '');

        if (empty($username) || empty($password)) {
            echo json_encode(['status' => 'error', 'message' => 'Username and password are required.']);
            exit;
        }

        try {
            $db = Connection('db_account');
            $stmt = $db->prepare("SELECT accountid, name, pwd, pv, email, google_2fa_enabled, google_2fa_secret, google_2fa_recovery FROM t_account WHERE name = ? LIMIT 1");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || md5($password) !== $user['pwd']) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid username or password.']);
                exit;
            }

            // Check 2FA if enabled
            if (!empty($user['google_2fa_enabled']) && $user['google_2fa_enabled'] == 1) {
                if (empty($twoFactorCode)) {
                    echo json_encode(['status' => '2fa_required', 'message' => 'Two-Factor Authentication code required.']);
                    exit;
                }
                require_once __DIR__ . '/../Functions/TwoFactor.php';
                $valid2FA = false;
                $rawSecret = $user['google_2fa_secret'] ?? '';
                if (!empty($rawSecret)) {
                    $dec = TwoFactor::decryptSecret($rawSecret);
                    if ($dec && TwoFactor::verifyCode($dec, $twoFactorCode)) $valid2FA = true;
                    elseif (TwoFactor::verifyCode($rawSecret, $twoFactorCode)) $valid2FA = true;
                }
                if (!$valid2FA) {
                    echo json_encode(['status' => 'error', 'message' => 'Invalid Two-Factor Authentication code.']);
                    exit;
                }
            }

            $isAdmin = ((int)$user['pv'] >= 9);
            $role = $isAdmin ? 'admin' : 'player';

            $tokenPayload = [
                'accountid' => (int)$user['accountid'],
                'username'  => $user['name'],
                'email'     => $user['email'],
                'pv'        => (int)$user['pv'],
                'role'      => $role
            ];
            $authToken = generateToken($tokenPayload, $secretKey);

            // Fetch player points
            $points = 0;
            try {
                $db_misc = Connection('db_misc');
                $pStmt = $db_misc->prepare("SELECT points FROM t_points WHERE accountid = ?");
                $pStmt->execute([$user['accountid']]);
                $points = (int)$pStmt->fetchColumn() ?: 0;
            } catch (Exception $e) {}

            echo json_encode([
                'status' => 'success',
                'message' => 'Login successful',
                'token' => $authToken,
                'user' => [
                    'accountid' => (int)$user['accountid'],
                    'username'  => $user['name'],
                    'email'     => $user['email'],
                    'pv'        => (int)$user['pv'],
                    'role'      => $role,
                    'points'    => $points,
                    'is_admin'  => $isAdmin
                ]
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
        }
        break;

    // 3. ACCOUNT OVERVIEW
    case 'account_overview':
        $authUser = requireAuth($secretKey);
        try {
            $db_account = Connection('db_account');
            $db_misc = Connection('db_misc');

            // Account details
            $stmt = $db_account->prepare("SELECT accountid, name, email, pv, Time FROM t_account WHERE accountid = ?");
            $stmt->execute([$authUser['accountid']]);
            $acc = $stmt->fetch(PDO::FETCH_ASSOC);

            // Points
            $points = 0;
            $pStmt = $db_misc->prepare("SELECT points FROM t_points WHERE accountid = ?");
            $pStmt->execute([$authUser['accountid']]);
            $points = (int)$pStmt->fetchColumn() ?: 0;

            // Character count
            $charCount = 0;
            $db_game = Connection('db_game');
            if ($db_game) {
                $cStmt = $db_game->prepare("SELECT COUNT(*) FROM t_characters WHERE accountid = ?");
                $cStmt->execute([$authUser['accountid']]);
                $charCount = (int)$cStmt->fetchColumn() ?: 0;
            }

            echo json_encode([
                'status' => 'success',
                'overview' => [
                    'accountid'       => (int)$acc['accountid'],
                    'username'        => $acc['name'],
                    'email'           => $acc['email'],
                    'pv'              => (int)$acc['pv'],
                    'registered_at'   => $acc['Time'],
                    'points'          => $points,
                    'character_count' => $charCount,
                    'role'            => $authUser['role']
                ]
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 4. CHARACTERS LIST
    case 'characters':
        $authUser = requireAuth($secretKey);
        try {
            $db_game = Connection('db_game');
            $characters = [];
            if ($db_game) {
                $stmt = $db_game->prepare("SELECT characterid, name, level, class, online, pk_status, guild_name FROM t_characters WHERE accountid = ? ORDER BY level DESC");
                $stmt->execute([$authUser['accountid']]);
                $characters = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            echo json_encode([
                'status' => 'success',
                'characters' => $characters
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 5. SERVER RANKINGS
    case 'rankings':
        try {
            $db_game = Connection('db_game');
            $topPlayers = [];
            if ($db_game) {
                $q = $db_game->query("SELECT name, level, class, guild_name FROM t_characters ORDER BY level DESC, exp DESC LIMIT 20");
                if ($q) $topPlayers = $q->fetchAll(PDO::FETCH_ASSOC);
            }
            echo json_encode([
                'status' => 'success',
                'rankings' => $topPlayers
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 6. ADMIN DASHBOARD STATS (PV >= 9 Required)
    case 'admin_stats':
        $authUser = requireAuth($secretKey);
        if ($authUser['role'] !== 'admin' && (int)$authUser['pv'] < 9) {
            http_response_code(403);
            echo json_encode(['status' => 'error', 'message' => 'Forbidden. Administrator privileges required.']);
            exit;
        }

        try {
            $db_account = Connection('db_account');
            $db_game = Connection('db_game');

            $totalAccounts = (int)$db_account->query("SELECT COUNT(*) FROM t_account")->fetchColumn();
            $bannedAccounts = (int)$db_account->query("SELECT COUNT(*) FROM t_account WHERE pv = 0")->fetchColumn();
            $totalChars = $db_game ? (int)$db_game->query("SELECT COUNT(*) FROM t_characters")->fetchColumn() : 0;
            $onlinePlayers = $db_game ? (int)$db_game->query("SELECT COUNT(*) FROM t_characters WHERE online = 1")->fetchColumn() : 0;

            echo json_encode([
                'status' => 'success',
                'stats' => [
                    'total_accounts'  => $totalAccounts,
                    'banned_accounts' => $bannedAccounts,
                    'total_characters'=> $totalChars,
                    'online_players'  => $onlinePlayers,
                    'active_theme'    => GetWebsiteOption('active_theme') ?: 'default'
                ]
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 7. ADMIN SWITCH THEME (PV >= 9 Required)
    case 'admin_set_theme':
        $authUser = requireAuth($secretKey);
        if ($authUser['role'] !== 'admin' && (int)$authUser['pv'] < 9) {
            http_response_code(403);
            echo json_encode(['status' => 'error', 'message' => 'Forbidden. Administrator privileges required.']);
            exit;
        }

        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;
        $newTheme = trim($body['theme'] ?? '');

        if (empty($newTheme)) {
            echo json_encode(['status' => 'error', 'message' => 'Theme identifier is required.']);
            exit;
        }

        if (function_exists('SetWebsiteOption')) {
            SetWebsiteOption('active_theme', $newTheme);
            echo json_encode([
                'status' => 'success',
                'message' => "Server active theme successfully switched to '$newTheme'!",
                'active_theme' => $newTheme
            ]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Theme management function not available.']);
        }
        break;

    // 8. ADMIN SEARCH ACCOUNT (PV >= 9 Required)
    case 'admin_search_account':
        $authUser = requireAuth($secretKey);
        if ($authUser['role'] !== 'admin' && (int)$authUser['pv'] < 9) {
            http_response_code(403);
            echo json_encode(['status' => 'error', 'message' => 'Forbidden. Administrator privileges required.']);
            exit;
        }

        $searchUser = trim($_GET['username'] ?? $_POST['username'] ?? '');
        if (empty($searchUser)) {
            echo json_encode(['status' => 'error', 'message' => 'Search username is required.']);
            exit;
        }

        try {
            $db_account = Connection('db_account');
            $stmt = $db_account->prepare("SELECT accountid, name, email, pv FROM t_account WHERE name = ? LIMIT 1");
            $stmt->execute([$searchUser]);
            $acc = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$acc) {
                echo json_encode(['status' => 'error', 'message' => "No account found matching '$searchUser'."]);
                exit;
            }

            $points = 0;
            try {
                $db_misc = Connection('db_misc');
                if ($db_misc) {
                    $pStmt = $db_misc->prepare("SELECT points FROM t_points WHERE accountid = ?");
                    $pStmt->execute([$acc['accountid']]);
                    $points = (int)$pStmt->fetchColumn() ?: 0;
                }
            } catch (Exception $e) {}

            $isBanned = ((int)$acc['pv'] <= 0);

            echo json_encode([
                'status' => 'success',
                'account' => [
                    'id' => (int)$acc['accountid'],
                    'accountid' => (int)$acc['accountid'],
                    'username' => $acc['name'],
                    'email' => $acc['email'],
                    'pv' => (int)$acc['pv'],
                    'points' => $points,
                    'is_banned' => $isBanned
                ]
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 9. ADMIN TOGGLE BAN (PV >= 9 Required)
    case 'admin_toggle_ban':
        $authUser = requireAuth($secretKey);
        if ($authUser['role'] !== 'admin' && (int)$authUser['pv'] < 9) {
            http_response_code(403);
            echo json_encode(['status' => 'error', 'message' => 'Forbidden. Administrator privileges required.']);
            exit;
        }

        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;
        $targetId = (int)($body['user_id'] ?? $body['accountid'] ?? 0);
        $banStatus = !empty($body['ban']) ? 1 : 0;

        if ($targetId <= 0) {
            echo json_encode(['status' => 'error', 'message' => 'Target account ID is required.']);
            exit;
        }

        try {
            $db_account = Connection('db_account');
            // pv = 0 means banned, pv = 1 means active player
            $newPv = ($banStatus === 1) ? 0 : 1;
            $stmt = $db_account->prepare("UPDATE t_account SET pv = ? WHERE accountid = ?");
            $stmt->execute([$newPv, $targetId]);

            $verb = $banStatus === 1 ? 'banished from' : 'pardoned and restored to';
            echo json_encode([
                'status' => 'success',
                'message' => "Account #$targetId has been successfully $verb the realm.",
                'is_banned' => ($banStatus === 1)
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 10. REALM NEWS & ANNOUNCEMENTS
    case 'news':
        try {
            $db_misc = Connection('db_misc');
            $stmt = $db_misc ? $db_misc->query("SELECT id, title, content, date, author FROM t_news ORDER BY id DESC LIMIT 5") : false;
            $news = $stmt ? $stmt->fetchAll(PDO::FETCH_ASSOC) : [];
            echo json_encode([
                'status' => 'success',
                'news' => $news
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'success', 'news' => []]);
        }
        break;

    // 11. REDEEM GIFT CODE
    case 'redeem_gift':
        $authUser = requireAuth($secretKey);
        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;
        $code = strtoupper(trim($body['code'] ?? ''));

        if (empty($code)) {
            echo json_encode(['status' => 'error', 'message' => 'Gift code is required.']);
            exit;
        }

        try {
            $db_misc = Connection('db_misc');
            if (!$db_misc) {
                echo json_encode(['status' => 'error', 'message' => 'Database connection unavailable.']);
                exit;
            }
            $stmt = $db_misc->prepare("SELECT * FROM t_gift_codes WHERE code = ? AND (used = 0 OR max_uses > times_used) LIMIT 1");
            $stmt->execute([$code]);
            $gift = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$gift) {
                echo json_encode(['status' => 'error', 'message' => 'Invalid or expired gift code.']);
                exit;
            }

            $accId = (int)$authUser['accountid'];
            if (!empty($gift['reward_points'])) {
                $reward = (int)$gift['reward_points'];
                $chk = $db_misc->prepare("SELECT COUNT(*) FROM t_points WHERE accountid = ?");
                $chk->execute([$accId]);
                if ($chk->fetchColumn() > 0) {
                    $up = $db_misc->prepare("UPDATE t_points SET points = points + ? WHERE accountid = ?");
                    $up->execute([$reward, $accId]);
                } else {
                    $ins = $db_misc->prepare("INSERT INTO t_points (accountid, points) VALUES (?, ?)");
                    $ins->execute([$accId, $reward]);
                }
            }

            $stmtUsed = $db_misc->prepare("UPDATE t_gift_codes SET times_used = times_used + 1 WHERE id = ?");
            $stmtUsed->execute([$gift['id']]);

            echo json_encode([
                'status' => 'success',
                'message' => "Gift code '$code' redeemed successfully! Reward credited.",
                'reward' => $gift['reward_points'] ?? 0
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Redemption system currently unavailable: ' . $e->getMessage()]);
        }
        break;

    // 12. CHANGE PASSWORD
    case 'change_password':
        $authUser = requireAuth($secretKey);
        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;
        $oldPass = trim($body['current_password'] ?? '');
        $newPass = trim($body['new_password'] ?? '');

        if (strlen($newPass) < 6) {
            echo json_encode(['status' => 'error', 'message' => 'New password must be at least 6 characters long.']);
            exit;
        }

        try {
            $db_account = Connection('db_account');
            $stmt = $db_account->prepare("SELECT pwd FROM t_account WHERE accountid = ? LIMIT 1");
            $stmt->execute([(int)$authUser['accountid']]);
            $currentHash = $stmt->fetchColumn();

            if (md5($oldPass) !== $currentHash) {
                echo json_encode(['status' => 'error', 'message' => 'Current password verification failed.']);
                exit;
            }

            $update = $db_account->prepare("UPDATE t_account SET pwd = ? WHERE accountid = ?");
            $update->execute([md5($newPass), (int)$authUser['accountid']]);

            echo json_encode(['status' => 'success', 'message' => 'Password changed successfully!']);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
        }
        break;

    // 13. REGISTER NEW ACCOUNT
    case 'register':
        $rawInput = file_get_contents('php://input');
        $body = json_decode($rawInput, true) ?: $_POST;

        $username = trim($body['username'] ?? '');
        $password = trim($body['password'] ?? '');
        $email = trim($body['email'] ?? '');

        if (strlen($username) < 4 || strlen($username) > 16 || !preg_match('/^[a-zA-Z0-9_]+$/', $username)) {
            echo json_encode(['status' => 'error', 'message' => 'Username must be 4-16 alphanumeric characters.']);
            exit;
        }
        if (strlen($password) < 6) {
            echo json_encode(['status' => 'error', 'message' => 'Password must be at least 6 characters long.']);
            exit;
        }
        if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email address format.']);
            exit;
        }

        try {
            $db_account = Connection('db_account');
            $chk = $db_account->prepare("SELECT COUNT(*) FROM t_account WHERE name = ?");
            $chk->execute([$username]);
            if ($chk->fetchColumn() > 0) {
                echo json_encode(['status' => 'error', 'message' => "Username '$username' is already claimed."]);
                exit;
            }

            $now = date('Y-m-d H:i:s');
            $stmt = $db_account->prepare("INSERT INTO t_account (name, pwd, email, pv, Time) VALUES (?, ?, ?, 1, ?)");
            $stmt->execute([$username, md5($password), $email, $now]);
            $newId = $db_account->lastInsertId();

            echo json_encode([
                'status' => 'success',
                'message' => "Account '$username' successfully registered! You may now enter the realm.",
                'accountid' => (int)$newId
            ]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Registration failed: ' . $e->getMessage()]);
        }
        break;

    default:
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid API action. Supported actions: server_info, login, register, account_overview, characters, rankings, news, redeem_gift, change_password, admin_stats, admin_set_theme, admin_search_account, admin_toggle_ban'
        ]);
        break;
}
