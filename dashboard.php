<?php
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
