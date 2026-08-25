<?php

/**
 * Talisman Auto-Update System
 * Automatically synchronizes local files with the GitHub master branch.
 */

class UpdateHandler {
    private static $repo_user = 'tdarkscorpion';
    private static $repo_name = 'New_Website';
    private static $branch    = 'main';
    
    // Remote URLs (Pointing to the PUBLIC 'New_Website' repo)
    private static $version_url = 'https://raw.githubusercontent.com/tdarkscorpion/New_Website/main/version.json';
    private static $update_url  = 'https://raw.githubusercontent.com/tdarkscorpion/New_Website/main/';
    
    // Local version file
    private static $version_file = __DIR__ . '/../version.json';

    /**
     * Check for updates and apply them if available.
     * This is designed to be called by LicenseHandler to avoid excessive requests.
     */
    public static function GetUpdateStatus() {
        $local = self::GetLocalVersion();
        $remote = self::GetRemoteVersion();

        if (!$remote) return ['status' => 'error', 'message' => 'Could not reach update server.'];

        $available = version_compare($remote['version'], $local['version'], '>');
        return [
            'status' => 'success',
            'available' => $available,
            'local_version' => $local['version'],
            'remote_version' => $remote['version'],
            'files' => $remote['files'] ?? []
        ];
    }

    public static function GetRemoteUpdateData() {
        return self::GetRemoteVersion();
    }

    public static function RunUpdate($remote_data) {
        return self::ApplyUpdate($remote_data);
    }

    private static function GetLocalVersion() {
        if (!file_exists(self::$version_file)) {
            return ['version' => '0.0.0', 'last_update' => 0];
        }
        return json_decode(file_get_contents(self::$version_file), true);
    }

    private static function GetRemoteVersion() {
        // Add timestamp to bypass GitHub's raw content cache
        $url = self::$version_url . '?t=' . time();
        $data = self::FetchFile($url);
        return $data ? json_decode($data, true) : false;
    }

    private static function ApplyUpdate($remote_data) {
        @set_time_limit(0);
        $files = $remote_data['files'];
        $hashes = $remote_data['hashes'] ?? [];
        $fail_count = 0;
        $skip_count = 0;
        $ok_count   = 0;
        $unchanged_count = 0;
        $errors = [];

        // Files that should never be overwritten by the auto-updater
        $protected = [
            'include/config.php', 'include/db_config.php',
            'include/item_desc.csv', 'include/item.csv',
            'version.json',
        ];

        // Re-use single cURL handle for persistent HTTPS connection
        $ch = function_exists('curl_init') ? curl_init() : null;

        foreach ($files as $file) {
            $file = str_replace('\\', '/', $file);

            // Skip protected / upload paths
            if (in_array($file, $protected)) { $skip_count++; continue; }
            if (strpos($file, 'install/')  === 0) { $skip_count++; continue; }
            if (strpos($file, 'uploads/')  === 0) { $skip_count++; continue; }
            if (strpos($file, 'assets/icons/') === 0) { $skip_count++; continue; }
            if (preg_match('/\.(zip|7z|rar|exe|gz|tar)$/i', $file)) { $skip_count++; continue; }

            $local_path = __DIR__ . '/../' . $file;

            // SMART DIFFING: Skip download if local file exists and MD5 matches remote hash
            if (isset($hashes[$file]) && file_exists($local_path)) {
                if (md5_file($local_path) === $hashes[$file]) {
                    $unchanged_count++;
                    $ok_count++;
                    continue;
                }
            }

            $content = self::FetchFile($file, $ch);
            if ($content === false) {
                $fail_count++;
                $errors[] = "Download failed: $file";
                continue;
            }

            $dir = dirname($local_path);

            if (!is_dir($dir)) {
                if (!@mkdir($dir, 0755, true)) {
                    $fail_count++;
                    $errors[] = "Cannot create dir: " . dirname($file);
                    continue;
                }
            }

            if (@file_put_contents($local_path, $content) === false) {
                $fail_count++;
                $errors[] = "Permission denied: $file";
            } else {
                $ok_count++;
            }
        }

        if ($ch) {
            curl_close($ch);
        }

        // Write version.json to mark update as applied
        $version_written = @file_put_contents(
            self::$version_file,
            json_encode(array_merge($remote_data, ['applied_at' => time()]), JSON_PRETTY_PRINT)
        );

        // Run Database Auto-Migration / Auto-Creation
        if (function_exists('EnsureAllDatabaseTablesExist')) {
            EnsureAllDatabaseTablesExist();
        }

        if ($fail_count === 0) {
            $updated_cnt = $ok_count - $unchanged_count;
            return ['success' => true, 'message' => "Updated & Database Synchronized successfully ({$updated_cnt} files updated, {$unchanged_count} unchanged, {$skip_count} skipped)"];
        }

        // If at least half succeeded, treat as partial success so version.json gets written
        $total_attempted = $ok_count + $fail_count;
        if ($ok_count > 0 && $fail_count <= 3) {
            return [
                'success'  => true,
                'message'  => "Updated with {$fail_count} minor warning(s). {$ok_count} files applied.",
                'warnings' => $errors
            ];
        }

        return [
            'success' => false,
            'message' => "Update failed: {$fail_count} file(s) could not be applied out of {$total_attempted}.",
            'errors'  => $errors
        ];
    }

    /**
     * Check local file integrity against manifest hashes
     */
    public static function VerifyIntegrity() {
        $remote_data = self::GetRemoteUpdateData();
        if (!$remote_data || !isset($remote_data['hashes'])) {
            return ['status' => 'error', 'message' => 'Could not fetch integrity manifest from GitHub.'];
        }

        $results = [];
        $hashes = $remote_data['hashes'];
        $total = count($hashes);
        $matches = 0;

        foreach ($hashes as $file => $expected_hash) {
            $file = str_replace('\\', '/', $file);
            if ($file === 'version.json') continue; // Skip self-verification to avoid recursive hash mismatch
            
            $local_path = __DIR__ . '/../' . $file;
            $status = 'missing';
            $current_hash = '';

            if (file_exists($local_path)) {
                $current_hash = md5_file($local_path);
                
                if ($current_hash === $expected_hash) {
                    $status = 'match';
                    $matches++;
                } else {
                    $status = 'outdated';
                }
            }

            $results[] = [
                'file' => $file,
                'status' => $status,
                'local_hash' => substr($current_hash, 0, 8),
                'remote_hash' => substr($expected_hash, 0, 8)
            ];
        }

        return [
            'status' => 'success',
            'summary' => [
                'total' => $total,
                'matches' => $matches,
                'issues' => $total - $matches
            ],
            'details' => $results
        ];
    }


    private static function FetchFile($path, $ch = null) {
        if (strpos($path, 'http://') === 0 || strpos($path, 'https://') === 0) {
            $url = $path;
        } else {
            $cleanPath = str_replace('\\', '/', $path);
            $parts = explode('/', $cleanPath);
            $encodedParts = array_map('rawurlencode', $parts);
            $url = self::$update_url . implode('/', $encodedParts) . '?t=' . time();
        }

        if (function_exists('curl_init')) {
            $created_handle = false;
            if (!$ch) {
                $ch = curl_init();
                $created_handle = true;
            }
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Talisman-Updater');
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            $content = curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if ($created_handle) {
                curl_close($ch);
            }
            if ($code === 200 && $content !== false) {
                return $content;
            }
        }
        $ctx = stream_context_create(['http' => ['timeout' => 30, 'header' => "User-Agent: Talisman-Updater\r\n"]]);
        return @file_get_contents($url, false, $ctx);
    }
}
