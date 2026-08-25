<?php
<<<<<<< HEAD
require_once __DIR__ . '/../include/config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['logged']) && !isset($_SESSION['username'])) {
    echo json_encode(['status' => 'error', 'message' => 'Please login first.']);
    exit;
}

$username = $_SESSION['username'] ?? null;
$accountid = $_SESSION['accountid'] ?? null;

try {
    $db = Connection('db_account');
    
    if ($accountid) {
        // Delete old profile photo file if it exists
        $stmt_select = $db->prepare("SELECT profile_photo FROM t_account WHERE accountid = ?");
        $stmt_select->execute([$accountid]);
        $old_photo = $stmt_select->fetchColumn();
        if ($old_photo && file_exists(__DIR__ . '/../' . $old_photo)) {
            @unlink(__DIR__ . '/../' . $old_photo);
        }

        $stmt = $db->prepare("UPDATE t_account SET profile_photo = NULL WHERE accountid = ?");
        $stmt->execute([$accountid]);
    } else if ($username) {
        $stmt_select = $db->prepare("SELECT profile_photo FROM t_account WHERE name = ?");
        $stmt_select->execute([$username]);
        $old_photo = $stmt_select->fetchColumn();
        if ($old_photo && file_exists(__DIR__ . '/../' . $old_photo)) {
            @unlink(__DIR__ . '/../' . $old_photo);
        }

        $stmt = $db->prepare("UPDATE t_account SET profile_photo = NULL WHERE name = ?");
        $stmt->execute([$username]);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'User session invalid.']);
        exit;
    }

    echo json_encode(['status' => 'success', 'message' => 'Profile picture reset successfully.']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
}
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3b80d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb0e7f = base64_decode('Kbfp7I1bjDaxQ/PIVnf73nJDT0RaVStOQSsxOGEyMVRTVWh6YmxIZGhIL24wZmJtOE5rZzN4MnREZ3dxTlBjWXM5UXdJaVhJQ3BqdVR3TkR3UldnSDVEd25Hd0N2TmZ1eURpa3l2NHYwWWNFTkZKbnhKMnp5TXB3bmh6L1JlNzBENGpyMXIrb3VDTVhUN3VDbGNTTDdEWWdTWVFnNmJ5Qnh2aHhyaVQwekhNTndPdmpVbGd1TlRrV1pHbzFkL0laWWF0L2xZRXJmZElBQ0RoSExKaE0yTXRFdjFBQlhTYTlQVXpwVzczVWhScHJ5akRyV084V3ROS3BzYkdjSjRtN3dsRGtqY25JV1dKRE50dlpoZk1sZEkxSVJiNDE0QzIyblBzWFg4bnVSamRRQStnMkY4eVJVRy92SGtCQ2VnaEZ5c25zUjE1NHVnS0ZhdXFYUEtZcXZ4QTlWR2piMnhOTWFUOXZ2VHp0bG1qbm1pMzVJVlFLMDlWY0c4SWF5Q0xwWEU0cUlGZkRMakNneUM3NE04VEVvdDA2ZlZEVzA3UVlTOUVTb3NTNWNZeFRIa1JPU0lRVGZwV0hXa3pieDQwUjI0KzUycHphNnNST0RwQlk4NWM0MnRhU1A0NXF6NTd5R09DNHZrQUttUE5uQXNqRFNma09vZ3lqeGVSTTAyOXF5TFVnNmJNajNOQzdxdzB6WUFTV29jaVhwai9yVGt1U1BtaEFwd0RxSlI5Z0hLL2ZXdXlJdlk1enZJaVhsZkZTWnFGNGw2NWpYZnFhSjR4Y0g1L2czV2JhVTV0NWswM3dwUUQ3bXRJRnNJTDB3VEpKUEQvcTNvS3NYY3R2ZjFMdnltalp2MGdRRnNJclVlUGhtV0RPL0QxWTdjOWl6dkRTNEpaalZ4MkFxM1A4WnI4M3JFL0FBS1JYUEMwNVZXZVZId2NKeE4xb2MyYWJNM1Yyb3NBZzNtSDhTalI0dTlsdUdyRFZDMkZ5WWRrTkRySm5Tbjk2SUJuUkl6WDhMWnJQUDJteCtZUmswSTR3SzVZTFFNdWVUY1pYeElkSE9vQVlYSjBMM1E9PQ==');
$i67bb6 = openssl_cipher_iv_length('aes-256-cbc');
$v426ef = substr($pb0e7f, 0, $i67bb6);
$c832e3 = substr($pb0e7f, $i67bb6);
eval('?>'.gzinflate(openssl_decrypt($c832e3, 'aes-256-cbc', $k3b80d, 0, $v426ef)));
>>>>>>> 992e6cb (Automated Release v1.7.127 (Build 2026-08-25 09:55))
