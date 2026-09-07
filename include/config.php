<?php
// config.php

// 0-A. Domain Whitelist Enforcement (must run before anything else)
require_once(__DIR__ . '/../Functions/DomainGuard.php');
DomainGuard::Enforce();

require_once(__DIR__ . '/db_config.php');

// Function to connect to the specified database
function connect_db($db_name) {
    $hostParts = explode(':', DB_SERVER);
    $host = $hostParts[0];
    $port = isset($hostParts[1]) ? $hostParts[1] : 3306;
    
    try {
        $conn = @new mysqli($host, DB_USERNAME, DB_PASSWORD, $db_name, (int)$port);
        if ($conn->connect_error) {
            return null;
        }
        return $conn;
    } catch (Throwable $e) {
        return null;
    }
}

// Ensure the root Functions are available
require_once(__DIR__ . '/../Functions/Database.php');
require_once(__DIR__ . '/../Functions/Accounts-Characters.php');
require_once(__DIR__ . '/../Functions/Settings.php');
require_once(__DIR__ . '/../Functions/Encrypt.php');
require_once(__DIR__ . '/../Functions/Token.php');
require_once(__DIR__ . '/../Functions/Permissions.php');
require_once(__DIR__ . '/../Functions/Cases.php');
require_once(__DIR__ . '/../Functions/Shop.php');
require_once(__DIR__ . '/../Functions/Others.php');
require_once(__DIR__ . '/../Functions/String.php');
require_once(__DIR__ . '/../Functions/Server.php');
require_once(__DIR__ . '/../Functions/BBCode.php');
require_once(__DIR__ . '/../Functions/Messages.php');
require_once(__DIR__ . '/../Functions/BaseURL.php');
require_once(__DIR__ . '/../Functions/Mailer.php');
require_once(__DIR__ . '/../Functions/License.php');

// 0. License Verification
LicenseHandler::Verify();

// 1. Session Security
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 0); // Set to 1 if using HTTPS
    ini_set('session.use_only_cookies', 1);
    session_start();
}

// 1.1 Single Session Enforcement
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    // Only check if enabled in settings
    if (GetWebsiteOption('enforce_single_session') === '1') {
        try {
            $db_check = Connection('db_account');
            $check_stmt = $db_check->prepare("SELECT last_session_id FROM t_account WHERE accountid = ?");
            $check_stmt->execute([$_SESSION['accountid']]);
            $last_sid = $check_stmt->fetchColumn();

            if ($last_sid && $last_sid !== session_id()) {
                // Session mismatch - newer login detected
                session_unset();
                session_destroy();
                header("Location: index.php?logout=single_session");
                exit;
            }
        } catch (Exception $e) {
            // Silently ignore DB errors during session check to avoid breaking the site
        }
    }
}

// 2. Global XSS Filter
function sanitize_xss(&$data) {
    if (is_array($data)) {
        foreach ($data as $key => &$value) {
            sanitize_xss($value);
        }
    } else {
        // Strip tags but allow very limited safe ones if needed
        // For absolute security, we strip everything
        $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}

// Run the filter on all inputs
sanitize_xss($_GET);
sanitize_xss($_POST);
sanitize_xss($_REQUEST);

// Global connection variable
$conn = connect_db(ACCOUNT_DB);
?>
