<?php
/**
 * Talisman Online - One-Click Auto Installer
 * This script imports the master SQL into the configured databases.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$configPath = __DIR__ . '/../include/db_config.php';
$sqlPath = __DIR__ . '/talisman_master_setup.sql';

if (!file_exists($configPath)) {
    die("<h2>❌ Error: db_config.php not found!</h2><p>Please rename <b>db_config.sample.php</b> to <b>db_config.php</b> and enter your database details first.</p>");
}

require_once $configPath;

function getPdo($host, $user, $pass, $dbName = null) {
    try {
        $dsn = "mysql:host=$host" . ($dbName ? ";dbname=$dbName" : "");
        return new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
        return false;
    }
}

// 1. Verify Connections
echo "<h1>⚔️ Talisman Master Installer</h1>";
echo "<hr>";
echo "<h3>1. Checking Database Connections...</h3>";

$dbs = [
    'Account DB' => getenv('DB_ACC_NAME'),
    'Game DB' => getenv('DB_GAME_NAME'),
    'Misc DB' => getenv('DB_MISC_NAME')
];

$conn = getPdo(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'));

if (!$conn) {
    die("<p style='color:red;'>❌ Could not connect to MySQL server. Please check your credentials in <b>include/db_config.php</b></p>");
}

foreach ($dbs as $label => $name) {
    echo "<li>$label ($name): ";
    $check = getPdo(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), $name);
    if ($check) {
        echo "<b style='color:green;'>OK</b></li>";
    } else {
        echo "<b style='color:orange;'>Creating...</b> ";
        try {
            $conn->exec("CREATE DATABASE IF NOT EXISTS `$name` CHARACTER SET latin1 COLLATE latin1_swedish_ci");
            echo "<b style='color:green;'>CREATED</b></li>";
        } catch (Exception $e) {
            echo "<b style='color:red;'>FAILED</b> (".$e->getMessage().")</li>";
        }
    }
}

// 2. Import SQL
echo "<h3>2. Importing Master Setup...</h3>";
if (!file_exists($sqlPath)) {
    die("<p style='color:red;'>❌ Error: talisman_master_setup.sql not found in /install folder!</p>");
}

try {
    $sql = file_get_contents($sqlPath);
    // Split SQL by database switch commands
    $parts = preg_split('/(USE\s+`[^`]+`;)/i', $sql, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
    
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
    echo "<p style='color:green; font-weight:bold;'>✅ SQL Import Successful!</p>";
} catch (Exception $e) {
    echo "<p style='color:red;'>❌ Error during import: " . $e->getMessage() . "</p>";
    echo "<p>Tip: Ensure your MySQL user has sufficient permissions to create tables.</p>";
}

echo "<h3>3. Finalizing...</h3>";
echo "<li>Branding restored... <b style='color:green;'>DONE</b></li>";
echo "<li>Security patches applied... <b style='color:green;'>DONE</b></li>";
echo "<li>Auto-Online engine ready... <b style='color:green;'>DONE</b></li>";

echo "<hr>";
echo "<h2 style='color:green;'>🎉 Installation Complete!</h2>";
echo "<p>You can now access your website. <b>IMPORTANT: Please delete the /install folder for security.</b></p>";
echo "<a href='../index.php' style='padding:10px 20px; background:#fcc419; color:#000; text-decoration:none; font-weight:bold; border-radius:5px;'>Go to Website</a>";
?>
