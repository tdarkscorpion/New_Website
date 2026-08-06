<?php
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
