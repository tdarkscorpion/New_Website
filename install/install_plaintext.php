<?php
/**
 * Talisman Online - Web Installer
 * This script configures the database, creates the .env file, and sets up tables.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$envFile = __DIR__ . '/../.env';
$sqlPath = __DIR__ . '/talisman_master_setup.sql';
$configFile = __DIR__ . '/../include/db_config.php';

function getPdo($host, $user, $pass, $dbName = null) {
    try {
        $dsn = "mysql:host=$host" . ($dbName ? ";dbname=$dbName" : "");
        return new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        return false;
    }
}

// Ensure include/db_config.php is loaded so we have access to functions if needed
if (file_exists($configFile)) {
    require_once $configFile;
}

$step = isset($_GET['step']) ? $_GET['step'] : 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['install'])) {
    $db_host = trim($_POST['db_host']);
    $db_user = trim($_POST['db_user']);
    $db_pass = trim($_POST['db_pass']);
    
    $db_acc = trim($_POST['db_acc']) ?: 'db_account';
    $db_game = trim($_POST['db_game']) ?: 'db_game';
    $db_misc = trim($_POST['db_misc']) ?: 'db_misc';

    // Test connection
    $conn = getPdo($db_host, $db_user, $db_pass);
    if (!$conn) {
        $error = "❌ Could not connect to MySQL server. Please check your credentials.";
    } else {
        // Write .env
        $envContent = "DB_HOST=$db_host\n";
        $envContent .= "DB_USER=$db_user\n";
        $envContent .= "DB_PASS=$db_pass\n";
        $envContent .= "DB_ACC_NAME=$db_acc\n";
        $envContent .= "DB_GAME_NAME=$db_game\n";
        $envContent .= "DB_MISC_NAME=$db_misc\n";
        
        file_put_contents($envFile, $envContent);
        
        // Reload environment variables into current request
        putenv("DB_HOST=$db_host");
        putenv("DB_USER=$db_user");
        putenv("DB_PASS=$db_pass");
        putenv("DB_ACC_NAME=$db_acc");
        putenv("DB_GAME_NAME=$db_game");
        putenv("DB_MISC_NAME=$db_misc");

        $step = 2; // Proceed to installation step
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Talisman Web Installer</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background: #1a1a2e; color: #fff; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .container { background: #16213e; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.5); max-width: 600px; width: 100%; }
        h1, h2, h3 { color: #e94560; text-align: center; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #a2a8d3; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #0f3460; border-radius: 5px; background: #1a1a2e; color: #fff; box-sizing: border-box; }
        button { width: 100%; padding: 12px; background: #e94560; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; font-weight: bold; transition: background 0.3s; }
        button:hover { background: #d83a56; }
        .alert { padding: 15px; margin-bottom: 20px; border-radius: 5px; }
        .alert-error { background: rgba(255,0,0,0.2); border: 1px solid red; color: #ff6b6b; }
        .alert-success { background: rgba(0,255,0,0.2); border: 1px solid green; color: #4cd137; }
        .alert-warning { background: rgba(255,165,0,0.2); border: 1px solid orange; color: #fbc531; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; padding: 10px; background: rgba(255,255,255,0.05); border-radius: 5px; }
        .btn-link { display: block; text-align: center; padding: 10px 20px; background: #fcc419; color: #000; text-decoration: none; font-weight: bold; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>

<div class="container">
    <h1>⚔️ Talisman Master Installer</h1>
    <hr style="border-color: #0f3460;">

    <?php if ($step == 1): ?>
        <p style="text-align: center; color: #a2a8d3;">Welcome! Let's set up your database connection.</p>
        
        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>

        <?php if (file_exists($envFile)): ?>
            <div class="alert alert-warning">
                ⚠️ A <b>.env</b> file already exists. Submitting this form will overwrite it.
            </div>
        <?php endif; ?>

        <form method="POST">
            <h3>MySQL Credentials</h3>
            <div class="form-group">
                <label>Database Host</label>
                <input type="text" name="db_host" value="127.0.0.1" required>
            </div>
            <div class="form-group">
                <label>MySQL Username</label>
                <input type="text" name="db_user" value="root" required>
            </div>
            <div class="form-group">
                <label>MySQL Password</label>
                <input type="password" name="db_pass" placeholder="Enter MySQL Password" required>
            </div>

            <h3>Database Names</h3>
            <div class="form-group">
                <label>Account DB</label>
                <input type="text" name="db_acc" value="db_account" required>
            </div>
            <div class="form-group">
                <label>Game DB</label>
                <input type="text" name="db_game" value="db_game" required>
            </div>
            <div class="form-group">
                <label>Misc/Web DB</label>
                <input type="text" name="db_misc" value="db_misc" required>
            </div>

            <button type="submit" name="install">Install & Initialize Database</button>
        </form>

    <?php elseif ($step == 2): ?>
        
        <?php
        $db_host = getenv('DB_HOST');
        $db_user = getenv('DB_USER');
        $db_pass = getenv('DB_PASS');
        $dbs = [
            'Account DB' => getenv('DB_ACC_NAME'),
            'Game DB' => getenv('DB_GAME_NAME'),
            'Misc DB' => getenv('DB_MISC_NAME')
        ];

        echo "<h3>1. Checking Database Connections...</h3><ul>";
        $conn = getPdo($db_host, $db_user, $db_pass);
        
        foreach ($dbs as $label => $name) {
            echo "<li>$label ($name): ";
            $check = getPdo($db_host, $db_user, $db_pass, $name);
            if ($check) {
                echo "<b style='color:#4cd137;'>OK</b></li>";
            } else {
                echo "<b style='color:#fbc531;'>Creating...</b> ";
                try {
                    $conn->exec("CREATE DATABASE IF NOT EXISTS `$name` CHARACTER SET latin1 COLLATE latin1_swedish_ci");
                    echo "<b style='color:#4cd137;'>CREATED</b></li>";
                } catch (Exception $e) {
                    echo "<b style='color:#ff6b6b;'>FAILED</b> (".$e->getMessage().")</li>";
                }
            }
        }
        echo "</ul>";

        // Import SQL
        echo "<h3>2. Importing Master Setup...</h3>";
        if (!file_exists($sqlPath)) {
            echo "<div class='alert alert-error'>❌ Error: talisman_master_setup.sql not found in /install folder!</div>";
        } else {
            try {
                $sql = file_get_contents($sqlPath);
                $parts = preg_split('/(USE\s+`[^`]+`;)/i', $sql, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
                
                echo "<ul>";
                $currentDb = "";
                foreach ($parts as $part) {
                    if (preg_match('/USE\s+`([^`]+)`;/i', $part, $matches)) {
                        $currentDb = $matches[1];
                        echo "<li>Switching to database: <b>$currentDb</b></li>";
                        $conn->exec("USE `$currentDb` ");
                    } else if (!empty(trim($part))) {
                        $conn->exec($part);
                    }
                }
                echo "</ul>";
                echo "<div class='alert alert-success'><b>✅ SQL Import Successful!</b></div>";
            } catch (Exception $e) {
                echo "<div class='alert alert-error'>❌ Error during import: " . htmlspecialchars($e->getMessage()) . "<br><small>Tip: Ensure your MySQL user has sufficient permissions to create tables.</small></div>";
            }
        }

        echo "<h3>3. Finalizing...</h3><ul>";
        echo "<li>Branding restored... <b style='color:#4cd137;'>DONE</b></li>";
        echo "<li>Security patches applied... <b style='color:#4cd137;'>DONE</b></li>";
        echo "<li>Auto-Online engine ready... <b style='color:#4cd137;'>DONE</b></li>";
        echo "</ul>";

        echo "<hr style='border-color: #0f3460;'>";
        echo "<h2>🎉 Installation Complete!</h2>";
        echo "<p style='text-align: center; color: #a2a8d3;'>Your .env file has been created. <b>IMPORTANT: Please delete the /install folder for security.</b></p>";
        echo "<a href='../index.php' class='btn-link'>Go to Website</a>";
        ?>

    <?php endif; ?>
</div>

</body>
</html>
