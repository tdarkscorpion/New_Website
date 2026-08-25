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
                                            <small style="opacity:0.6; display:block; margin-bottom:5px;">Latest GitHub Release</small>
                                            <h2 id="latestVerText" style="margin:0; color:#2ca4bf;">Checking...</h2>
                                        </div>
                                    </div>

                                    <div class="glass-card" style="background:rgba(0,0,0,0.2); padding:25px; text-align:center; margin-bottom:30px;">
                                        <div id="updateStatusBox">
                                            <div id="updateLoading" style="display:block;">
                                                <i class="fas fa-spinner fa-spin fa-2x" style="color:#2ca4bf; margin-bottom:10px;"></i>
                                                <p style="margin:0;">Checking remote server for updates...</p>
                                            </div>

                                            <div id="updateReady" style="display:none;">
                                                <i class="fas fa-check-circle fa-3x text-success" style="margin-bottom:15px;"></i>
                                                <h4 style="margin:0 0 5px 0;">System is Up-to-Date</h4>
                                                <p style="opacity:0.7; font-size:0.9rem; margin-bottom:20px;" id="updateMessage">You are running the latest version of Talisman Web Engine.</p>
                                                <div style="display:flex; gap:10px; justify-content:center;">
                                                    <button class="btn-glow" onclick="checkSystemUpdates(true)">
                                                        <i class="fas fa-sync-alt"></i> CHECK AGAIN
                                                    </button>
                                                    <button class="btn-glow" style="background:rgba(255,255,255,0.1); border-color:rgba(255,255,255,0.2);" onclick="verifySystemIntegrity()">
                                                        <i class="fas fa-shield-alt"></i> VERIFY INTEGRITY
                                                    </button>
                                                </div>
                                            </div>

                                            <div id="updateFound" style="display:none;">
                                                <i class="fas fa-arrow-alt-circle-down fa-3x text-info" style="margin-bottom:15px; animation: bounce 2s infinite;"></i>
                                                <h4 style="margin:0 0 5px 0; color:#fff;" id="newVerFoundText">New Version Found!</h4>
                                                <p style="opacity:0.7; font-size:0.9rem; margin-bottom:20px;">A new system update is available. Click below to pull down files automatically.</p>
                                                <button class="btn-glow" style="padding:12px 30px; font-size:1.1rem;" onclick="doSystemUpdate()" id="updateNowBtn">
                                                    <i class="fas fa-download"></i> INSTALL UPDATE NOW
                                                </button>
                                            </div>

                                            <div id="updateError" style="display:none;">
                                                <i class="fas fa-exclamation-circle fa-3x" style="color:#ef4444; margin-bottom:15px;"></i>
                                                <h4 style="margin:0 0 5px 0; color:#ef4444;">Update Check Failed</h4>
                                                <p style="opacity:0.7; font-size:0.9rem; margin-bottom:20px;" id="updateErrorMsg">Could not reach update server.</p>
                                                <button class="btn-glow" onclick="checkSystemUpdates(true)">
                                                    <i class="fas fa-sync-alt"></i> RETRY CHECK
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Verification Manifest Result Modal/Area -->
                                    <div id="integrityResultBox" class="glass-card" style="display:none; padding:20px;">
                                        <h4 style="margin-top:0;"><i class="fas fa-file-code"></i> File Integrity Scan Results</h4>
                                        <div id="integritySummary" style="margin-bottom:15px; font-size:0.9rem;"></div>
                                        <div style="max-height:250px; overflow-y:auto; border:1px solid rgba(255,255,255,0.05); border-radius:8px; padding:10px; font-family:monospace; font-size:0.8rem;">
                                            <table style="width:100%; border-collapse:collapse;" id="integrityTable">
                                                <thead>
                                                    <tr style="text-align:left; border-bottom:1px solid rgba(255,255,255,0.1);">
                                                        <th style="padding:6px;">File</th>
                                                        <th style="padding:6px;">Status</th>
                                                        <th style="padding:6px;">Local Hash</th>
                                                        <th style="padding:6px;">Remote Hash</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- License & Whitelist Config Tool -->
                                <div id="licenseRecheckTool" style="display:none; padding:30px; flex-grow:1; overflow-y:auto; max-height:100%;">
                                    <h3 class="gradient-text"><i class="fas fa-shield-alt"></i> License & Whitelist Status</h3>
                                    <p style="color:rgba(255,255,255,0.6); margin-bottom:25px;">View your domain license status and manually trigger recheck with the central licensing server.</p>
                                    
                                    <div class="glass-card" style="background:rgba(0,0,0,0.2); padding:25px; margin-bottom:30px;">
                                        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px;">
                                            <div>
                                                <small style="opacity:0.6; display:block;">Current Domain</small>
                                                <h3 style="margin:5px 0 0 0; color:#fff;" id="licDomainText"><?php echo $_SERVER['HTTP_HOST'] ?? 'Unknown'; ?></h3>
                                            </div>
                                            <div>
                                                <button class="btn-glow" id="btnForceRecheckLic" onclick="forceRecheckLicense(true)">
                                                    <i class="fas fa-sync-alt"></i> FORCE RECHECK LICENSE
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="licenseStatusDetails" class="glass-card" style="padding:20px;">
                                        <h4 style="margin-top:0;"><i class="fas fa-info-circle"></i> License Diagnostics</h4>
                                        <div id="licenseDiagnosticBody">
                                            <p style="opacity:0.7;">Click "Force Recheck License" above to query the central whitelist server directly.</p>
                                        </div>
                                    </div>
                                </div>

                                <iframe id="adminFrame" name="adminFrame" src="about:blank" style="width: 100%; flex-grow: 1; border: none; min-height: 500px; display: none;"></iframe>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
// Tab Switching System
function openTab(evt, tabName) {
    var i, tabcontent, navlinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active-tab");
    }
    
    navlinks = document.getElementsByClassName("nav-btn");
    for (i = 0; i < navlinks.length; i++) {
        navlinks[i].classList.remove("active");
    }
    
    var selectedTab = document.getElementById(tabName);
    if(selectedTab) {
        selectedTab.style.display = "block";
        selectedTab.classList.add("active-tab");
    }
    
    if(evt && evt.currentTarget) {
        evt.currentTarget.classList.add("active");
    }

    // Auto-close sidebar on mobile when a tab is selected
    if (window.innerWidth <= 768) {
        var sidebar = document.getElementById('dashboardSidebar');
        if (sidebar && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
        }
    }
}

// Mobile Sidebar Toggle
function toggleAdminSidebar() {
    var sidebar = document.getElementById('dashboardSidebar');
    if (sidebar) {
        sidebar.classList.toggle('active');
    }
}

// Accordion Toggle for Admin Tools
function toggleAccordion(element) {
    const content = element.nextElementSibling;
    element.classList.toggle('active');
    content.classList.toggle('expanded');
}

// Admin Action Frame Loader
function loadAdminAction(url) {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'none';
    document.getElementById('systemUpdatesTool').style.display = 'none';
    document.getElementById('licenseRecheckTool').style.display = 'none';
    
    var frame = document.getElementById('adminFrame');
    frame.style.display = 'block';
    frame.src = url;
}

// Show GM Management Tool
function showGMManagement() {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('adminFrame').style.display = 'none';
    document.getElementById('systemUpdatesTool').style.display = 'none';
    document.getElementById('licenseRecheckTool').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'block';
}

// Handle GM Management Actions (Search & Update)
async function handleGMManagement(action) {
    if (action === 'search') {
        const username = document.getElementById('gmSearchUser').value.trim();
        if (!username) {
            alert('Please enter a username to search.');
            return;
        }

        try {
            const formData = new FormData();
            formData.append('username', username);

            const res = await fetch('Actions/manage-gm.php?action=search', {
                method: 'POST',
                body: formData
            });

            const data = await res.json();
            if (data.status === 'success') {
                document.getElementById('resUserName').innerText = data.user.name;
                document.getElementById('resUserEmail').innerText = data.user.mail || 'No Email Registered';
                document.getElementById('resUserPv').innerText = 'PV: ' + data.user.pv;
                document.getElementById('newPvLevel').value = data.user.pv;
                document.getElementById('gmUserResult').style.display = 'block';
            } else {
                alert(data.message || 'User not found.');
                document.getElementById('gmUserResult').style.display = 'none';
            }
        } catch (e) {
            alert('Error communicating with server.');
        }
    } else if (action === 'update') {
        const username = document.getElementById('resUserName').innerText;
        const newPv = document.getElementById('newPvLevel').value;
        const auth2fa = document.getElementById('admin2faCode').value.trim();

        if (!auth2fa) {
            alert('Admin 2FA code is required to authorize this change.');
            return;
        }

        if (!confirm(`Are you sure you want to change permissions for ${username} to Level ${newPv}?`)) {
            return;
        }

        try {
            const formData = new FormData();
            formData.append('target_user', username);
            formData.append('new_pv', newPv);
            formData.append('admin_2fa', auth2fa);

            const res = await fetch('Actions/manage-gm.php?action=update', {
                method: 'POST',
                body: formData
            });

            const data = await res.json();
            if (data.status === 'success') {
                alert(data.message);
                document.getElementById('resUserPv').innerText = 'PV: ' + newPv;
                document.getElementById('admin2faCode').value = '';
            } else {
                alert(data.message || 'Failed to update permissions.');
            }
        } catch (e) {
            alert('Error communicating with server.');
        }
    }
}

// Show License Recheck Tool
function showLicenseRecheck() {
    document.getElementById('adminDefaultView').style.display = 'none';
    document.getElementById('adminFrame').style.display = 'none';
    document.getElementById('gmManagementTool').style.display = 'none';
    document.getElementById('systemUpdatesTool').style.display = 'none';
    document.getElementById('licenseRecheckTool').style.display = 'block';
}

// Force Recheck License Action
async function forceRecheckLicense(isManual = false) {
    const btn = document.getElementById('btnForceRecheckLic');
    let originalHtml = '';
    if (btn && isManual) {
        originalHtml = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking Central Server...';
    }

    try {
        const res = await fetch('Actions/recheck-license.php');
        const data = await res.json();

        if (btn && isManual) {
            btn.disabled = false;
            btn.innerHTML = originalHtml;
        }

        const body = document.getElementById('licenseDiagnosticBody');
        if (body) {
            let statusBadge = '<span class="status-badge success"><i class="fas fa-check-circle"></i> VALID LICENSE</span>';
            if (data.status === 'error') {
                statusBadge = '<span class="status-badge danger" style="background:rgba(239, 68, 68, 0.2); color:#ef4444; border:1px solid rgba(239, 68, 68, 0.3);"><i class="fas fa-times-circle"></i> ' + (data.reason || 'INVALID LICENSE').toUpperCase() + '</span>';
            }

            body.innerHTML = `
                <div style="margin-bottom:15px;">${statusBadge}</div>
                <p style="margin:5px 0;"><strong>Message:</strong> ${data.message || 'License check complete.'}</p>
                <p style="margin:5px 0; font-size:0.85rem; opacity:0.7;"><strong>Cached Until:</strong> ${data.cached_until ? new Date(data.cached_until * 1000).toLocaleString() : 'N/A'}</p>
            `;
        }

        if (isManual) {
            alert(data.message || 'License recheck complete.');
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
                latestText.innerText = 'v' + (data.current_version || '?');
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
    if (!confirm('Are you sure you want to download and install updates from GitHub now?')) {
        return;
    }
    
    isUpdating = true;
    const btn = document.getElementById('updateNowBtn');
    const topBtn = document.getElementById('topUpdateBtn');
    if (btn) {
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> DOWNLOADING & INSTALLING...';
    }
    if (topBtn) {
        topBtn.disabled = true;
        topBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> UPDATING...';
    }

    try {
        const res = await fetch('Actions/system-update.php?method=update');
        const data = await res.json();
        
        isUpdating = false;

        if (data.status === 'success') {
            alert('System updated successfully! The page will now reload.');
            window.location.reload();
        } else {
            let errStr = data.message || 'Update failed.';
            if (data.errors && data.errors.length) {
                errStr += '\n\nDetails:\n' + data.errors.join('\n');
            }
            alert(errStr);
            if (btn) {
                btn.disabled = false;
                btn.innerHTML = '<i class="fas fa-download"></i> RETRY INSTALLATION';
            }
            if (topBtn) {
                topBtn.disabled = false;
                topBtn.innerHTML = '<i class="fas fa-sync-alt"></i> RETRY UPDATE';
            }
        }
    } catch (e) {
        isUpdating = false;
        alert('Network error while performing system update.');
        if (btn) {
            btn.disabled = false;
            btn.innerHTML = '<i class="fas fa-download"></i> RETRY INSTALLATION';
        }
        if (topBtn) {
            topBtn.disabled = false;
            topBtn.innerHTML = '<i class="fas fa-sync-alt"></i> RETRY UPDATE';
        }
    }
}

async function verifySystemIntegrity() {
    const box = document.getElementById('integrityResultBox');
    const summary = document.getElementById('integritySummary');
    const tbody = document.querySelector('#integrityTable tbody');
    
    if (box) box.style.display = 'block';
    if (summary) summary.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Scanning local files against master hashes...';
    if (tbody) tbody.innerHTML = '';

    try {
        const res = await fetch('Actions/system-update.php?method=verify');
        const data = await res.json();

        if (data.status === 'error') {
            if (summary) summary.innerHTML = `<span style="color:#ef4444;"><i class="fas fa-times-circle"></i> ${data.message}</span>`;
            return;
        }

        const sum = data.summary;
        if (summary) {
            let sumColor = sum.issues === 0 ? '#2ecc71' : '#f1c40f';
            summary.innerHTML = `<strong>Scan Complete:</strong> <span style="color:${sumColor};">${sum.matches} matching</span>, <span style="color:${sum.issues > 0 ? '#ef4444' : '#a3a3a3'};">${sum.issues} modified/outdated</span> out of ${sum.total} total tracked files.`;
        }

        if (tbody && data.details) {
            let html = '';
            data.details.forEach(item => {
                let badge = '<span style="color:#2ecc71;"><i class="fas fa-check"></i> Match</span>';
                if (item.status === 'outdated') {
                    badge = '<span style="color:#f1c40f;"><i class="fas fa-exclamation-triangle"></i> Modified</span>';
                } else if (item.status === 'missing') {
                    badge = '<span style="color:#ef4444;"><i class="fas fa-times"></i> Missing</span>';
                }

                html += `<tr style="border-bottom:1px solid rgba(255,255,255,0.05);">
                    <td style="padding:6px; color:#fff;">${item.file}</td>
                    <td style="padding:6px;">${badge}</td>
                    <td style="padding:6px; opacity:0.6;">${item.local_hash || 'N/A'}</td>
                    <td style="padding:6px; opacity:0.6;">${item.remote_hash}</td>
                </tr>`;
            });
            tbody.innerHTML = html;
        }
    } catch (e) {
        if (summary) summary.innerHTML = '<span style="color:#ef4444;"><i class="fas fa-times-circle"></i> Failed to run integrity verification scan.</span>';
    }
}

// Automated check on Dashboard load for Admin account #1
document.addEventListener('DOMContentLoaded', function() {
    const notice = document.getElementById('systemUpdateNotice');
    if (notice) {
        checkSystemUpdates(false);
    }
});

// Profile Picture Handling Functions
async function uploadProfilePic() {
    const fileInput = document.getElementById('profilePicInput');
    const file = fileInput.files[0];
    if (!file) return;

    // Validate size (max 2MB)
    if (file.size > 2 * 1024 * 1024) {
        alert('File size exceeds 2MB limit.');
        return;
    }

    const btn = document.getElementById('btnUploadPic');
    const originalText = btn ? btn.innerHTML : '';
    if (btn) {
        btn.disabled = true;
        btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Uploading...';
    }

    const formData = new FormData();
    formData.append('profile_photo', file);

    try {
        const response = await fetch('Actions/update-profile-pic.php', {
            method: 'POST',
            body: formData
        });

        const result = await response.json();
        if (btn) {
            btn.disabled = false;
            btn.innerHTML = originalText;
        }

        if (result.status === 'success') {
            const newUrl = result.url + '?t=' + new Date().getTime();
            // Update preview and sidebar avatars dynamically
            const sidebarAvatar = document.getElementById('userAvatarSidebar');
            const previewAvatar = document.getElementById('settingsAvatarPreview');
            
            if (sidebarAvatar) sidebarAvatar.src = newUrl;
            if (previewAvatar) previewAvatar.src = newUrl;
            
            alert('Profile picture updated successfully!');
        } else {
            alert(result.message || 'Failed to upload profile picture.');
        }
    } catch (error) {
        if (btn) {
            btn.disabled = false;
            btn.innerHTML = originalText;
        }
        alert('Error uploading profile picture. Please try again.');
    }
}

async function resetProfilePic() {
    if (!confirm('Are you sure you want to reset your profile picture to default?')) {
        return;
    }

    try {
        const response = await fetch('Actions/reset-profile-pic.php', {
            method: 'POST'
        });

        const result = await response.json();

        if (result.status === 'success') {
            const newUrl = result.url;
            const sidebarAvatar = document.getElementById('userAvatarSidebar');
            const previewAvatar = document.getElementById('settingsAvatarPreview');
            
            if (sidebarAvatar) sidebarAvatar.src = newUrl;
            if (previewAvatar) previewAvatar.src = newUrl;
            
            alert('Profile picture reset to default!');
        } else {
            alert(result.message || 'Failed to reset profile picture.');
        }
    } catch (error) {
        alert('Error resetting profile picture. Please try again.');
    }
}

// 2FA Management JS Logic
async function handle2FA(action) {
    try {
        let formData = new FormData();
        formData.append('action', action);

        if (action === 'disable') {
            const code = document.getElementById('disable2faCode').value.trim();
            if (!code) { alert('Please enter your 2FA verification code.'); return; }
            formData.append('code', code);
        } else if (action === 'confirm') {
            const code = document.getElementById('verify2faCode').value.trim();
            if (!code) { alert('Please enter the code from your authenticator app.'); return; }
            formData.append('code', code);
        }

        const response = await fetch('Actions/user-2fa.php', {
            method: 'POST',
            body: formData
        });

        const data = await response.json();

        if (data.status === 'success') {
            if (action === 'setup') {
                document.getElementById('2fa-status-area').style.display = 'none';
                document.getElementById('2fa-qr-img').src = data.qr_url;
                document.getElementById('2fa-secret-text').innerText = data.secret;
                document.getElementById('2fa-setup-area').style.display = 'block';
            } else if (action === 'confirm') {
                document.getElementById('2fa-setup-area').style.display = 'none';
                const list = document.getElementById('recovery-codes-list');
                list.innerHTML = '';
                data.recovery_codes.forEach(code => {
                    list.innerHTML += `<div style="background:rgba(0,0,0,0.3); padding:8px; border-radius:6px; text-align:center;">${code}</div>`;
                });
                document.getElementById('2fa-recovery-area').style.display = 'block';
            } else if (action === 'disable') {
                alert(data.message);
                location.reload();
            }
        } else {
            alert(data.message || 'Operation failed.');
        }
    } catch (e) {
        alert('Error processing 2FA request.');
    }
}

// General Player Settings Handler (Change Pass & Email)
async function handlePlayerSettings(action) {
    const formData = new FormData();
    formData.append('action', action);

    if (action === 'change_password') {
        const oldPass = document.getElementById('pass_old') ? document.getElementById('pass_old').value : '';
        const newPass = document.getElementById('pass_new').value;
        const confirmPass = document.getElementById('pass_confirm').value;

        if (newPass !== confirmPass) {
            alert('New passwords do not match.');
            return;
        }

        formData.append('old_password', oldPass);
        formData.append('new_password', newPass);
    } else if (action === 'change_email') {
        const oldPass = document.getElementById('email_old_pass') ? document.getElementById('email_old_pass').value : '';
        const newEmail = document.getElementById('email_new').value;

        formData.append('old_password', oldPass);
        formData.append('new_email', newEmail);
    }

    try {
        const res = await fetch('Actions/player-settings.php', {
            method: 'POST',
            body: formData
        });

        const data = await res.json();
        if (data.status === 'success') {
            alert(data.message);
            if (action === 'change_password') {
                if (document.getElementById('pass_old')) document.getElementById('pass_old').value = '';
                document.getElementById('pass_new').value = '';
                document.getElementById('pass_confirm').value = '';
            }
        } else {
            alert(data.message || 'Update failed.');
        }
    } catch (e) {
        alert('Error updating settings.');
    }
}

// Mini Games Frontend UI Controller
function showGame(gameKey) {
    document.getElementById('minigameLobby').style.display = 'none';
    document.getElementById('gameViewContainer').style.display = 'block';
    
    var container = document.getElementById('activeGameArea');
    if (gameKey === 'wheel') {
        container.innerHTML = `
            <h3><i class="fas fa-sync-alt text-warning"></i> Fortune Wheel</h3>
            <p>Spin the wheel to win bonus <?php echo $tp_short; ?> or special rewards!</p>
            <div style="position:relative; width:260px; height:260px; margin:20px auto; border-radius:50%; border:8px solid #2ca4bf; box-shadow:0 0 20px rgba(44,164,191,0.5); display:flex; align-items:center; justify-content:center; background:radial-gradient(circle, #1a202c 0%, #0d1117 100%);">
                <i class="fas fa-dharmachakra fa-6x" id="wheelGraphic" style="color:#2ca4bf; transition: transform 4s cubic-bezier(0.15, 0.9, 0.15, 1);"></i>
            </div>
            <button class="btn-glow" id="spinBtn" onclick="playMiniGame('spin_wheel')" style="padding:12px 30px; font-size:1.1rem;">
                <i class="fas fa-play"></i> SPIN NOW
            </button>
        `;
    } else if (gameKey === 'dice') {
        container.innerHTML = `
            <h3><i class="fas fa-dice-six text-success"></i> Master Dice</h3>
            <p>Roll 4 or higher to DOUBLE your points!</p>
            <div style="margin:30px 0; font-size:4rem; color:#2ecc71;" id="diceRollArea">
                <i class="fas fa-dice-d6"></i>
            </div>
            <button class="btn-glow" id="rollBtn" onclick="playMiniGame('dice_master')" style="padding:12px 30px; font-size:1.1rem; background:#2ecc71!important;">
                <i class="fas fa-dice"></i> ROLL DICE
            </button>
        `;
    } else if (gameKey === 'lottery') {
        container.innerHTML = `
            <h3><i class="fas fa-ticket-alt text-warning"></i> Talisman Daily Lottery</h3>
            <p>Purchase tickets to enter tonight's grand draw!</p>
            <div style="background:rgba(0,0,0,0.3); padding:20px; border-radius:12px; margin:20px 0;">
                <h2 style="color:#f1c40f; margin:0;" id="jackpotAmount">Loading...</h2>
                <small>CURRENT JACKPOT POT</small>
            </div>
            <div class="modern-form inline-form" style="justify-content:center;">
                <div class="form-group" style="width:120px;">
                    <input type="number" id="ticketCount" value="1" min="1" max="50">
                    <label>Tickets</label>
                </div>
                <button class="btn-glow" onclick="buyLotteryTickets()" style="background:#f1c40f!important; color:#000!important;">
                    <i class="fas fa-shopping-cart"></i> BUY NOW
                </button>
            </div>
        `;
    }
    loadRecentWinners(gameKey);
}

function showLobby() {
    document.getElementById('gameViewContainer').style.display = 'none';
    document.getElementById('minigameLobby').style.display = 'block';
}

async function playMiniGame(gameKey) {
    var btn = (gameKey === 'spin_wheel') ? document.getElementById('spinBtn') : document.getElementById('rollBtn');
    if (btn) { btn.disabled = true; btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Playing...'; }

    try {
        var formData = new FormData();
        formData.append('game_key', gameKey);

        if (gameKey === 'spin_wheel') {
            var wheel = document.getElementById('wheelGraphic');
            if (wheel) {
                var randomDegrees = 1440 + Math.floor(Math.random() * 360);
                wheel.style.transform = `rotate(${randomDegrees}deg)`;
            }
        }

        const res = await fetch('Actions/minigame-play.php?action=play', { method: 'POST', body: formData });
        const data = await res.json();

        setTimeout(() => {
            if (btn) { btn.disabled = false; btn.innerHTML = '<i class="fas fa-play"></i> PLAY AGAIN'; }
            if (data.status === 'success') {
                alert(data.message);
                // Dynamically update points everywhere in the UI
                if (data.new_balance !== undefined) {
                    const overviewPts = document.getElementById('userPointsOverview');
                    const sidebarPts  = document.getElementById('userPointsSidebar');
                    const mobPts      = document.getElementById('userPointsSidebarMobile');
                    if (overviewPts) overviewPts.innerText = data.new_balance;
                    if (sidebarPts)  sidebarPts.innerText  = data.new_balance;
                    if (mobPts)      mobPts.innerText      = data.new_balance;
                }
            } else {
                alert(data.message || 'Game failed.');
            }
            loadRecentWinners(gameKey.split('_')[0]);
        }, gameKey === 'spin_wheel' ? 4000 : 500);

    } catch (e) {
        if (btn) { btn.disabled = false; btn.innerHTML = 'PLAY AGAIN'; }
        alert('Communication error with game server.');
    }
}

async function loadRecentWinners(gameKey) {
    var list = document.getElementById('winnersList');
    if (!list) return;

    try {
        const res = await fetch(`Actions/minigame-play.php?action=winners&game=${gameKey}`);
        const data = await res.json();
        
        if (data.status === 'success' && data.winners.length > 0) {
            var html = '';
            data.winners.forEach(w => {
                html += `
                    <div style="display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid rgba(255,255,255,0.05); font-size:0.85rem;">
                        <span><i class="fas fa-user-circle" style="color:#2ca4bf;"></i> ${w.username}</span>
                        <span class="text-success">+${w.reward} TP</span>
                    </div>
                `;
            });
            list.innerHTML = html;
        } else {
            list.innerHTML = '<p style="opacity:0.5; font-size:0.85rem;">No recent winners yet.</p>';
        }
    } catch (e) {
        list.innerHTML = '<p style="opacity:0.5; font-size:0.85rem;">Failed to load winners.</p>';
    }
}
</script>
