<?php
<<<<<<< HEAD
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
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka9c89 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba9f7 = base64_decode('hhw2+1tsM3DbqXgbujvNXkpMMUxlbGdmTTYzUjZUVGJNc1JoREZVdGh6QnVFd1VRUEtZZzVuMUZFMnM0NUhFUW9EMkdrS01NRkozOG9qbFM3NFZYZ2dUVkVwWWZUTk9kVXBnMExxZy9RdVUwdHFQQVFLMGs3czdOUDZJdGZzOXZodno3YUFkWmJTMGpDUHBGSnJIaStpdGZRY2ZjN3N1ZnU4bEFZNHVMLzJLbFpNdWdhUldsMEZJbXMwdHJHSTB3d1BGaG5QS0xHcTUwQ0pza0VOMmZ1VWhmcVF5TWFweTlNWFVLR28rWjl3UlpiZWZ4MVNzbHFyUGIvUE9pQUFsa0NoTTJGZkhQekdETkh4WW1TaHJIS2RnWm5qTTArMHZjelA0SzhVemRJZlVWZHNCQXJhSjI5ZUV4RVEveWxQa3RaUEI2VGpHWFVFbmpQT3hIZWkzNFlwUkdkZkhrckQ5bjRRcHlhSThMS2xXNVJJc0V4V3V3S2hyZjdPeEtHcCtQRlBzTnpNWDlXMjVSZGJid2dKNkVjdlNDWmlhMzFXMEkrSDkxMnd4NHpyNWhrbGMzTHFRNm95SHhoY05DOVZpbHl5NGRwU2JKNkNFYjFreXg3ZmJRTzIvckhoMDE0STRYakhNSm5WMWtKZWo0cDJGSkRuVXBnYU12clFnSDJlNm5TOTh4VktpREd3dDhOaUpSdlI0a0YrVFpvaTA0ZjQyMGFjaU50a2hoZjM2d3p6ZXJtSDh4Z1FNSTRCZFhydVRid1k3ODhhMFU1TG5BVXRoWGt4eVJaZno2MlZxMloxWnQ0THQ2eFRuMHFXcXIyTGx0a3NYT2I2Mlh1dGV4Q3g1Z2xTVG5tT0RkSTJFakxEcDM5cEhwNlkxbXB0cFllWHN4VDkzd2xyWGxXNVpOR3p4N1lXeFM0N0c5UWxkQllGbW5GSWFleCtWT0UrUWVNMEtkQ2dSc09FOFZySm9iTnBpcDFtZmhhTS8rVkx4SHJOME9wc0pqcEpDVEFTK2h6Sm1zYTJudVVUVU9PRzdpQ2NVZmhMRWRYeDJGcFlTbGVBNXBmOVoxdk5WNEVlNXVCU1BSSk9YZTY3RVlVcGwvUWRNOGJ6V25uR05SVHlta2xzMDZZMjhQcys2ZEEzUGd6ZXpyQkJzZGRlSUM3VFV6MzgrK29QNVNKTTExekZzUWY0VEltamNKMjFCZElLTm95ZW1ya3JteEthOHVSSjVSMVdqc3J0cWlNcHJINDVHYy9XSEJHU1VIMGhUVCt4bHd4bkxQZEdHVTBON3JocXk2WDN1cG5sZEQwZk9PZ0RQdVZiMHQyOGR2bDBwTUYvSzF2THFaYnFIM0dyTTF1b2IzTW0wS0RPUkUwUEJBNjdwWjhxeXp5TGVlT3pMWGRJbmp2N0dJZzkwb2VGTHRLWDUyQjAybnlXYVMvQlpPMlcrT2FNWVloMkVXa092a2RjMXhvbkJVSXFqcVJad1d4VGRUcUo5NTJKWlZsS3dQUHdVRUI5aFVOOTQ2YTZ4b24xeVJ3d21mcWpVZWhFUTV5NUczMHl1QSs5Nzh5TGVQZ1B4bVRuL3c1UzBOVjVNa1lidEdabzVuRU5xZFpiRHlCM1RzNktmWHdDbmtkWjFpMjUzVzVoSm4xcEZNb0RGWU13RWxpaWwrMng4aVlXczQraXhvUTZFZXFFT2NyS09pNElUQkd3aHNHYVN1VFBEVkNvQWZYRm81ZHdOZWlUcWFHVFMyWGVubUN3Yi9QV1FCYWZzV1dQWVVWaFlHcGh6WkFLaVpVZmIxNmhkM0ZuOEZPTE1zaG9uMkhtTWtXcC9hY05JWTNNbHhPTlNWN2RjNnR2d29CYytQMVdCVktxOHFlRmtKTzAwVy9XNTFSQXBaaW02U3FDWFUwS3hkS1pBb2N3aHlzdTY3YTRKUFc4VmpUSE8wbHFtT3d4UEpTUWJqZHF3U2VQNDV0aEthWVFNVDJYdzRad2o0UmdJUGozRzRXYncwbno4WGdkVjlhZHdFbUpaa0YwYStibWlKdWtRcklwLzdSMUFpdDQrV3p6SUVpelZORUJySUZWTDRWbTdscC8rbDBPREQxdXg5bUkzbFZYN1lRdHdtc254eHdxeUtCSDdRTDZ0Ty9PamlmQ0RmRzBidzJrQ0tIbG1DZ3l6dXB4YzlQLzNlbHhNeGY4cFZERFhhTlJwZGptUVdnME4ya0NCSFN6Z2duZjIrZGtzME5VYWxmaEQybkk3Y2Q1WlQ0a2I4RDlPZDZHTHhoUVZNeWFNc2lvV3BKWXNDbEFybmRxcDJvak9NeWJMUmhPSkZRRnpSMm9aQU9DMmkvNURxLzh6ZTdPRzE4TU41WjlUWFdYcEExWmhGQkhOcDRoV1laL05SQUxCZGNtOWIzS0Y5aU1xWmRFcTAwaW90L2dlc2c1THhNK2pTTmRWMkxnK3ZHSS9LU2R4RFA4dFgrYVBBZlVnPQ==');
$i546f0 = openssl_cipher_iv_length('aes-256-cbc');
$v3802b = substr($pba9f7, 0, $i546f0);
$ca2356 = substr($pba9f7, $i546f0);
eval('?>'.gzinflate(openssl_decrypt($ca2356, 'aes-256-cbc', $ka9c89, 0, $v3802b)));
>>>>>>> 992e6cb (Automated Release v1.7.127 (Build 2026-08-25 09:55))
