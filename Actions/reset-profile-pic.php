<?php
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
