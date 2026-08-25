<?php
require_once __DIR__ . '/../include/config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['logged']) && !isset($_SESSION['username'])) {
    echo json_encode(['status' => 'error', 'message' => 'Not logged in.']);
    exit;
}

$username = $_SESSION['username'] ?? null;
$accountid = $_SESSION['accountid'] ?? null;

if (!$accountid && $username) {
    try {
        $db = Connection('db_account');
        $stmt = $db->prepare("SELECT accountid FROM t_account WHERE name = ?");
        $stmt->execute([$username]);
        $accountid = $stmt->fetchColumn();
        if ($accountid) {
            $_SESSION['accountid'] = $accountid;
        }
    } catch (Exception $e) {}
}

if (!$accountid) {
    echo json_encode(['status' => 'error', 'message' => 'Account ID not found.']);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_pic'])) {
    $file = $_FILES['profile_pic'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        $error_messages = [
            UPLOAD_ERR_INI_SIZE   => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
            UPLOAD_ERR_FORM_SIZE  => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
            UPLOAD_ERR_PARTIAL    => 'The uploaded file was only partially uploaded.',
            UPLOAD_ERR_NO_FILE    => 'No file was uploaded.',
            UPLOAD_ERR_NO_TMP_DIR => 'Missing a temporary folder.',
            UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
            UPLOAD_ERR_EXTENSION  => 'A PHP extension stopped the file upload.'
        ];
        $msg = $error_messages[$file['error']] ?? 'Unknown upload error.';
        echo json_encode(['status' => 'error', 'message' => $msg]);
        exit;
    }

    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
    if (!in_array($ext, $allowed_extensions)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid file extension. Only JPG, JPEG, PNG, GIF, and WEBP allowed.']);
        exit;
    }

    $max_size = 2 * 1024 * 1024; // 2MB
    if ($file['size'] > $max_size) {
        echo json_encode(['status' => 'error', 'message' => 'File too large. Max 2MB allowed.']);
        exit;
    }

    $upload_dir = __DIR__ . '/../uploads/profiles/';
    if (!is_dir($upload_dir)) {
        if (!mkdir($upload_dir, 0755, true)) {
            echo json_encode(['status' => 'error', 'message' => 'Failed to create upload directory.']);
            exit;
        }
    }

    $filename = 'profile_' . $accountid . '_' . time() . '.' . $ext;
    $target_file = $upload_dir . $filename;

    if (move_uploaded_file($file['tmp_name'], $target_file)) {
        try {
            $db = Connection('db_account');

            // Delete previous profile photo if it exists
            $stmt_old = $db->prepare("SELECT profile_photo FROM t_account WHERE accountid = ?");
            $stmt_old->execute([$accountid]);
            $old_photo = $stmt_old->fetchColumn();
            if ($old_photo && file_exists(__DIR__ . '/../' . $old_photo)) {
                @unlink(__DIR__ . '/../' . $old_photo);
            }

            // Update database
            $stmt = $db->prepare("UPDATE t_account SET profile_photo = ? WHERE accountid = ?");
            $stmt->execute(['uploads/profiles/' . $filename, $accountid]);

            echo json_encode(['status' => 'success', 'message' => 'Profile picture updated!', 'path' => 'uploads/profiles/' . $filename]);
        } catch (Exception $e) {
            echo json_encode(['status' => 'error', 'message' => 'Database error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to move uploaded file. Check folder permissions.']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No file uploaded.']);
}
