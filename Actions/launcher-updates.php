<?php
<<<<<<< HEAD
if (!isset($_SESSION['username']) || !IsAdministrator()) {
    die("Access Denied");
}

$data_dir = __DIR__ . '/../Launcher/data/';
$message = '';
$message_type = 'success';

// Ensure the directory exists
if (!is_dir($data_dir)) {
    mkdir($data_dir, 0755, true);
}

// Handle Form Submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action'])) {
        
        // --- DELETE FILE ---
        if ($_POST['action'] === 'delete' && !empty($_POST['filename'])) {
            $filename = basename($_POST['filename']);
            $target_file = $data_dir . $filename;
            
            if (file_exists($target_file)) {
                if (unlink($target_file)) {
                    $message = "File '" . htmlspecialchars($filename) . "' has been deleted.";
                } else {
                    $message = "Error deleting file.";
                    $message_type = 'error';
                }
            } else {
                $message = "File not found.";
                $message_type = 'error';
            }
        }
        
        // --- SYNC CHECKSUMS ---
        elseif ($_POST['action'] === 'sync') {
            global $db_misc;
            
            if (!$db_misc) {
                $message = "Sync failed: Database connection error.";
                $message_type = 'error';
            } else {
                // Function to get md5 recursively
                function getChecksumsLocal($dir, $baseDir, $db) {
                    $checksums = array();
                    $files = glob($dir . '/*');
                    
                    if (is_array($files)) {
                        foreach ($files as $file) {
                            if (is_file($file)) {
                                $relativePath = ltrim(str_replace($baseDir, '', $file), '/');
                                $checksum = md5_file($file);
                                
                                // Check if exists
                                $stmt = $db->prepare("SELECT md5_checksum FROM file_checksums WHERE file_path = ?");
                                $stmt->execute([$relativePath]);
                                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                
                                if ($row) {
                                    if ($row['md5_checksum'] !== $checksum) {
                                        $checksums[$relativePath] = $checksum;
                                    }
                                } else {
                                    $checksums[$relativePath] = $checksum;
                                }
                            } elseif (is_dir($file)) {
                                $checksums = array_merge($checksums, getChecksumsLocal($file, $baseDir, $db));
                            }
                        }
                    }
                    return $checksums;
                }
                
                try {
                    $checksumsToUpdate = getChecksumsLocal($data_dir, $data_dir, $db_misc);
                    
                    if (!empty($checksumsToUpdate)) {
                        $stmt = $db_misc->prepare("INSERT INTO file_checksums (file_path, md5_checksum) VALUES (?, ?) ON DUPLICATE KEY UPDATE md5_checksum = VALUES(md5_checksum)");
                        foreach ($checksumsToUpdate as $filePath => $checksum) {
                            $stmt->execute([$filePath, $checksum]);
                        }
                        $message = "Checksums synchronized! (" . count($checksumsToUpdate) . " files updated)";
                    } else {
                        $message = "Checksums are already synchronized. No updates needed.";
                    }
                } catch (Exception $e) {
                    $message = "Sync failed: " . $e->getMessage();
                    $message_type = 'error';
                }
            }
        }
    }
}

// Get list of current files
$files = array();
if (is_dir($data_dir)) {
    if ($dh = opendir($data_dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file !== "." && $file !== "..") {
                $files[] = array(
                    'name' => $file,
                    'size' => filesize($data_dir . $file),
                    'time' => filemtime($data_dir . $file)
                );
            }
        }
        closedir($dh);
    }
}
// Sort files by name
usort($files, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

function formatBytes($size, $precision = 2) {
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');   
    return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[floor($base)];
}
?>

<div class="glass-card">
    <h2 class="section-title"><i class="fas fa-upload text-info"></i> Launcher Updates Management</h2>
    <p style="color: rgba(255,255,255,0.7); margin-bottom: 20px;">Synchronize your checksums so players can automatically download the latest updates.</p>

    <?php if ($message): ?>
        <div style="background: <?php echo $message_type === 'error' ? 'rgba(231, 76, 60, 0.2)' : 'rgba(46, 204, 113, 0.2)'; ?>; border: 1px solid <?php echo $message_type === 'error' ? 'rgba(231, 76, 60, 0.4)' : 'rgba(46, 204, 113, 0.4)'; ?>; padding: 15px; border-radius: 8px; margin-bottom: 20px; color: #fff;">
            <i class="fas <?php echo $message_type === 'error' ? 'fa-exclamation-triangle' : 'fa-check-circle'; ?>"></i> <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 20px;">
        
        <!-- Upload Form -->
        <div class="glass-card" style="background: rgba(0,0,0,0.2);">
            <h3><i class="fas fa-sync-alt"></i> Sync Checksums</h3>
            <p style="font-size: 0.85rem; opacity: 0.8;">After deleting files or manually adding patches to the <code>Launcher/data</code> folder, you must sync checksums to notify the launcher of the changes.</p>
            <form action="" method="POST">
                <input type="hidden" name="action" value="sync">
                <button type="submit" class="btn-glow" style="background: #2ecc71 !important; width: 100%;">Sync Now</button>
            </form>
        </div>

        <!-- File List -->
        <div class="glass-card" style="background: rgba(0,0,0,0.2);">
            <h3><i class="fas fa-folder-open"></i> Current Patch Files</h3>
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>File Name</th>
                            <th>Size</th>
                            <th>Last Modified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($files)): ?>
                            <tr>
                                <td colspan="4" style="text-align: center; padding: 20px; opacity: 0.5;">No files found in data directory.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($files as $f): ?>
                                <tr>
                                    <td><strong><?php echo htmlspecialchars($f['name']); ?></strong></td>
                                    <td><?php echo formatBytes($f['size']); ?>B</td>
                                    <td><?php echo date('Y-m-d H:i:s', $f['time']); ?></td>
                                    <td>
                                        <form action="" method="POST" style="margin: 0; display: inline-block;" onsubmit="return confirm('Are you sure you want to delete <?php echo htmlspecialchars($f['name']); ?>?');">
                                            <input type="hidden" name="action" value="delete">
                                            <input type="hidden" name="filename" value="<?php echo htmlspecialchars($f['name']); ?>">
                                            <button type="submit" style="background: rgba(231, 76, 60, 0.8) !important; padding: 6px 12px !important; font-size: 0.8rem; border-radius: 6px !important;"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k71c8d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd2986 = base64_decode('gtZUkAh1nSkER6F4zWFGrFNzRm14NERwVWNZclhaakh6WkxhYml3QlhYR1JWVkdPVjhEcDBSOW9COTRPM0Y1UXFzUk8weEJLMWM1cW84VFJ0TmZhdVlPalM5WXFlNHJJaS9NcmR6alFPQWF5UUEwNU5Zc2xtMGk1OWJiZ3VyaWNIV0ZScHZwdkVsazRmOE5uNnNtYzEvZkpXUk5CUW81QWpUMVVVMGR4bURkRXdmR3lHMmhockZ4OVcrODdVbCsvSDFSZGtsZDN5U3NPRTNHMmFFT1pvbHlFeVdjVis0T0Z6K0M2REdqTC9IZys0SXVzSFhlczFOWTZwZGpDaHhSU3JUYWZ0ZVRZK0UwWTFBVkdPOVNpTjF4SnVQeTNDMW9Pa3J1Z1RpOU9ZSHRpNnVHMFhJUGFZWGRMc280bFpyOUpocE5DbFI2OWxVRmlweXptMnlRSmxiblk0ZzBWVE00UlB1dTlzeURiMElzOTZWcER0NmNKU2wyRUx0dXhRQWt6YVN1TEFBTGdCeE1KdHZpN1dLUms3a1Qwakt2QkFidEpBSE5qU0lNVmNJc2tlelpoa2R0cW5LWXcrQmY2a09Mb3ErMll1YXRoalpZdjNDYTNJY2Fnb0lRdVdZZXk1S0Z5dFkzRVRpNDZNb0lHWHVLVWg4anZqRU5ocmJqQnpBQjJ3YjF0UEdabEZ3eStxdk9qZ05CM0xwUU5idk0vb09GeU9EMEE3aGZrcUN1eVRRVFVPY1loWWlXZkdXM0RabVdFa3NBcWhxNm9HTTROTmRvT2ZyaXpwSEk0NGhmUW41Z3BKRHZpNlowS3F3RHBzOGxtZ3lSZ1EyY1RJaC9CaTZpQUVKcmlrKzdwQlNOWG1wY0VCS3REdGhibHBKRnFxVXpnOFkzVlJnbzlmT2R5LzJmemh1azRrOU53ZXNuY1c3Q3pUK1dIZlVmdG5DSjJaNTRJUEdpOU51bTk5eG5QeVh6VkkzbjE4SFRqQnRvYUlPODBhdWFFUmsxb2ZMci9IdVJ0SjJZaFVFV0p2WWpNLzEvbWZUWEhoK2gxVnd5L0xnczVodUFCT21TdSs2Ni9vV0pOSnNXalZJQzc4VU9tQmRMQUVZZ1hBdDFkc1NaQ2wzWkZ0dWFrZ2N1d3BuSzQ4SDNaUU5Jd3hpbkFKTnQ0QUtoamhsb1FjRzRtNGpvN0tZZWtnd3QvUitVOFRBczEyRGUvSEFyWi9aSFIycFhwQVd5cGhVaEg3Ui9WYkNxcE43OVpkS2tTM21lQS9LZmY1YkxuYldvM2N1SVhFeTUyWE04ME9CZ0hXVTBKNDM1enlXSU9LWUdRQXRhWk10QzRwVGNPcVVNWjBJekpaWHM0MGFmZzJtNXZycGV6VHg4OWg2WE9nUVRWdlpQdG93THJ4T2xyUmM0elJrZGRYcmNDdXdlQ0hHNmFxSEVNUXo5R00zaG9uT2ZGbjB1eTB0UXpsNXUxVEIveW4vMnplYVV6UEtLRHBDOEltRkhkRkdZN2ZVYXdIejlxcVMycHZqWm5CcWZ1SjdxOWMzRWpsZHRZQXliWEdHNWpadVBwaVdiQWExcVZ1YVV6akVWazByQWhVcS9iUU42T0hOYldTRHNCOUF1MEFqOXpyUTFUYzhoVkdxdU5aSEVHbHEvUWVUY3NaZmZmN25tTHhtSHBoTjY0bUxVaDJWNGlIMnYxR0JxVGhZTlRYWFpkUjNwL1E1c0RlNU8xRFFKOEM5Y2tYY1pxWnV3THpSdEUwT2pjRVd6MmRrMjRtSE9nR09NRmNUdTM5enlxTllzUmU5dFZuMEdVRGd0RElUTU5RUTdNSzVacHdidWNUYWZSa2JEb2trY09uQmd3ekk3K3JaenE3VHgwMWtLUGU1YnNKbVlwWEJqcG1LcjFzSEttT3hCUWVsSFl0Vm9abUhQMkthVEE0cDNRWGdpbHk0d2JKMG1CR0c1Y1daL0dSWGQ2QjFEM3EzaGdMcjloNkpwYlhNNUFoMjU2NVVqVFhEMkZqdTZWaTNjcHEzU0w2MUh5K3M5K0JzM21QQTBHeTBoWXlCQTZGeWxza01nL2sxMDJyenZlelpFVjM3UzZQTFJwcXpBalVRM3ZvM3ZiMVRxaTBGNlY1NXlXVG1FNURyTmtRaktLRHdrMkNOOFBVcFVMMWtsTlliazVkVHJ6ZkphTVVkdlRleGFvYmpoTTEzUjBXSmpHOFVyblNBZng0T3M2bUhrLzRSbk9GRHI3d0I4NXB2WDhlbXRXaWtuK0ErS21MNEdiR3QxQUtQNkRmMVVFM2l1K1F3RUMwaG4xTmdiZlc4aTRsK3ViaWZsNHFudkNoVlkxTUNjYktFM1dwa3oxRW9va09SaGE5UU1GNjdYbXpVUjlDd2hVK3R5cll4dHptQmlQekZ6V3hzbk13Ui9PZE9nYzBMeHJXMGF4L2t4Z3VYN1VhZ3YwMkZFQiszdlNyWUNRUjNWWjhXbFY2b0pWMlBhQXo0Y3hZY1BsNHpyRnNiKzV6VnJuRW9EU3dvZ0hqWER2RXFySGdlOTZwcFFvVnQrUUZXUHNWd05DWmVRcy9qNmlVY2FaeHBuSlNJbzl3NHdabDZraHZnbVlEaVJkOERaeUdhcTgvZVZaMlNNUE5wbkVGc3RGS2tEZFB1Ty85S3FqNk9jZmRxcExXdnRsSWt5WG40dUpobDl5WXlsYUNtVWxPcmdIbERHWXljcXRxMlJ5Y2w5LzFwZGRrMnR4V2tqZkhkaEhubERxTXdqT0dqbUcza3dqbWNmM1VNQjBnczlIRjJLc0MvUk1ES1ZMNU5FYlNpRHVBNlVrMDdycytkaTdlMTg1ZjZ3alp6N3BTZ2R5WkhpaGR0UzRMTU5XdXZLUCtHcEp3NW1ETmdEZUtUS3p6YmFxbVhPeFJKWmhZcGM2eXRQcFA1d0p2QjF1bGs1RnpPZmM4cTBBOXpONlMxekwxb0NJc05nR0xRR0V2aEV5SHpaNHdqcVh6U3VNUWRGaGJ2US8yaGFGblJCTnlXKzFRb3lRc0ZZeGVPSUVtT1k2bXc5YWVOcy85aVE1Wk9zZnMyUUwrNXBoOHdaZmN3cktWdjA2cTRNbXRkRHVOczZkK0o1c1dlOHJqWkp6bS83SnJ2dTBpSDF2YUtWZUNGSzBjNHlmWm1mTmRTOEZNUll1bnRXNjNJNUVRSk92QXFWN3F2TmxmQWVsWW9PanVQM25IUjFraEtxWDQxTXUxT3NYUnU3dEJwWmlhUEFqUCtXYWh5OGVUNldxUnFsSHJvOXh2bUpBSDk4RzVqb2ZqUk1IYk5QRzVpN3VaTDl6eUZFdW1pcWNIVVByclhTd1pBSE04UUMzaTdDbEhmdjZ2MzdBWnlNc1h4WU92NVZiZVkxRnFMeHdhV2UxSXRHcXNpMVY2UVQ3MWpKeXpYeDNwT3NUeHhBTm15YTNZRUtMR05OeUZGQ254Lyt4a1RydXlqQkJpWjVMeUVxbWxwaGl5U3U0anpKTENqYVpqSzU0N3AxZnhOS2NxbngyMFFMdXo1L2RTTTVvQXNrUkQ4RTA3WjZjZ3ZXMkVyamhaellvMVJGRVQySGdBM1ZBZENJY1paa3Y2ckdVNGhPU3VrWVM1VlJVWHBGWGxTRGxXSGNnZm1vZFVmVk5oVlR5T2sxREtGdmhhbUd6RG5UM0oreTE5dFM2TDhtM0VFL1dxdkFzQ2Juamx1NUtJVHQrakZiNjdGV3AyNUN3K3NRaUpWcTVMdHhTdk5OOUNBUFU4b3k0Vkh0T0NPeEtFS3VuNG9XMWxBSnVVK21UM29Pdk83eEtYTFZJS0NTQVVGNHBtdDZpY0d1Wk4yNDIzamhBVzVMMi91V2hpeDRqc3YxUHh4dFcydzNEOXl0WkpsN3NGTzJabmJ0Tzl3MG8vTitBS05ScU9yNFNFUmZkN2hXZlBiMi91OVhYMGdhZVh0aS9Rd0I3WXdkL05yY1FrOU9TeVgrb1BDWXdlSXJodkh2V3dZWnF6RUNIRjhySk5obXFtUGkxb29QcVBKV3duSzNGYUVOSVFSREZHQVFkT2dUbWVUd2NZL3lyRXNDd3NBbmNFK1pXZFhrdVJzVFdQN1RTUWNXUlY2MFdMeUViZE5hSy9Qanpac0dJYnJnSmtIeHQ0cmlUU01XR0N4S1lRNXdySW4vSEd5WG9ST0diRXpzWlNRQ3FQN1RFTE9NUzhKdHRLb25lMnNHaVNHRkI0TlROWG1BblNMK1RJRzVpdkk0Vk5LUEZmenJibFdsUFVwR2hmOS83U3MyZ2ZhQkdWenFnVlNwaG9rV3BGNmoxY2tqdWw5OExxeVFtQVFSY2tjUlphNmNpQ1FPTjBqcjNoYUNFMEVKRHo4aG0yUnFCV2JHU01ibnBDalJsQ1ErQkxFMHBmZ0NtSXNBLzBBcG5vb2ttQWM4SnFsaTVaM1FYN0FSRjNUUnMxeGlSdCt5WHZDY0h3YUF0azhYR2gwSVJrcXovN0F6Tlk2THBKcXlqcU83eXVuS3RMSmQwZjZWNGF2MmVVdS9vVlNDOHphNkIvS05MS0FHNzJjOU1qd1pzZGRzeU1Eak5vZHBXdGt1a3g5aVdpUWlRczkxR2lkUT0=');
$i85573 = openssl_cipher_iv_length('aes-256-cbc');
$v66794 = substr($pd2986, 0, $i85573);
$c9b6d9 = substr($pd2986, $i85573);
eval('?>'.gzinflate(openssl_decrypt($c9b6d9, 'aes-256-cbc', $k71c8d, 0, $v66794)));
>>>>>>> f88af2f (Automated Release v1.7.89 (Build 2026-08-06 14:34))
