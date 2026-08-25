<?php
<<<<<<< HEAD

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
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kfeed4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p62226 = base64_decode('f8jbaBt7yggyWXxMZ8wpMVM5STFSNUZySWFpTTRtVFlQZWVsOUNjTnNHd2pQZVhZa2Erc1IxM015UEhOK0dCWUM3ekJiV3QxZm4zTTI5L2dvZGdCcE8yUTkvVUx6M0xxaHcrODYra0VzNkF6VkxQSFZBYkgxaEZkNFEzNW5ydHAzc3AwdHRDaEt1OHZBWEwwNDBEMnBFNjR2MWRrMzVFVmYxc3A1NFIzdC9tRXFvQWJ2TXVwaTN2TnBLK3I2d2lpUVc2WGpBNGxNQVFKVE02bG1aSExwbTVtQ2h3WlQ3SmlUM0ozbGNyb3dtZU1SaTdkT3ZLZy8xWWFZL2RYblBwT0IzbWdBZWd0VFd0VWp6UlpIbkNiT2dyYVozVmtUQWdjSjVOZFE2aWdLRmVjdXkyYUlGUm1CSU93VER3REpMOERXb2p0ZExOR0d1UDJtcmRqYm9sSzhpL21uVTZJUEI4R0wvemV1Mnl5Y21yN1UxVUtXTnh6bkFQZFUzTkFleExscUxxM3hnbVQ1bU1UUFNZMkxxV3ZXN2hXbGd2KzdGVGtDSmtlaFRkZldIZ2EvMEhjL2JDWHVOTkdqa1c1U0NKSEk4b2l6MTFMbkk1U0o4bzJTNytmRmpEbzYyL250NVdqZkkwWHJjSWRpSHhKd05DN25SOUxiOXVjNjdBVVM1dEdJRWl5bTdaZ1BKM29LZ1JnTHZyODZlRUI2Z0s0cFlBekF5K3RrdTgrbXZEMERhMmRRdTRFUzk2dm95K3d1WE43bTVZUHNmaXdwVWg4K0lXaUNMME9PWSt6VEl1M3Nvck9UWnp3c2IwcENKc3p0Q0N5blhDTVRTUnVRd3puQWVpeEM5VFpURWV2K2lBSDdhYXQwRVdSNXh5ZW54SEdhTUlsNEtscm1CTkU1c3IvakFyWGE2SzRvR0h2N2FmV3EzZFVtZzdRRWJnanArTGNxaE5reFhGSWlneGJHaE9DVEd4a2tlb3VobVd2SlMxZCthR2Zuem9RYTVRSXJlWlRlM0Rnc1JzNnc4M2prSjFBRlp3S0dxcjAyTjV3ZlExai8rc2RtVXhoaWp5NlBzVTVvUlo1SURGbHlTL0E0UEVkM3ZRbnVBZ2NwZXEyYzcya2pBVU85V0VaQjB2WGFLN2NpMXZRWmNZUk1HK2kvTnRLaVdSWTNlUFRtRzZIVU1TZTdwOHpYcGVZTEd0ZlhsR1Fqa2NRcklCelY0UTFKUUxUaEk4eDZzRm9QNEUwWVVsdEM1M3lCbVVad3JQWjE2cVNEb0tkK09YQ3E0cG9wYjA4ODJyY0RaQitIM1IvcHR6OE9MUGJzYlIxMkRZZ0E0Yk0rSTFsbVZjSjkrTlpyOEFKUWxaemxCQTI3dHJ1bmhnc3IvOGR5QVNLR3dEQWtSMWRSSmIrdWFIeHVlL3U4RWJhZjl5OE5YWlRvOVBRVW5naktKd2duWC8vS1NxaUZXcG1RQkZEWlkwTUpIOVNObGIvMGtQVHFhaUtnSHUwUWlGdDZScGV2dUhaUUVDL011c3RBZjh1a0JpVm9aUmNCKzZiUEN0eHZNMFFsaG1LYVR4R3poNGN0MzZFdytweUorNGJCVCsrNEFFQ0RPZFltUmNDRVhFL1J5Q2FSMm5aaGxGNWZyZEw4WFdDN2Izb25oeTN3TXYvS1VJVEUxRk1mL2RScnhBNlB6TU9Xd28rbEYrWTNzUWlVYmZXN3RLR2kvdlp0ejVQZ012YSs4SzUyVlN5SXNWWWM1V09yb0lwZk4wa3pOQ05td1c2VmFBTHF0eGI4ZzFkNENDbTZFb2pLL1JFUTVTbHdIV0lvdFNxZ21yamVSYngyOTBFNS81akF4d1ZFcUhyQVBPQlA3WXBVQ2VGbEorU0hucWZLOFlqbVliUEpta3VraTV5bitCQUw1UmcrOXJ1WWhGUTRaRXN3NXREbFh3dCttQ0c1WndaZnphRE1NMGhNZC82RCtVZmk2R3JZTGpxN2hWT3pYK1hOVlRINlBHNmpOM1Y4V04xSkw1TGhOdGsxVVI5RHE0Snk0MFJIbWQ2ZVlxYW9RcEJNaTQyM3BzSnZxT1dRUGFmWmR4RlFUb05lV09TNCtTdUcrWHlFTDJ5dUZzbFlhZDc3amI1Y1lFV3V2dFUzSVZLSHVhQWxpd2JNcUtDcFMwdG1ReGhSelorYkRpZUxYZ3VpOW9zRDIzb3pMWTBiZFFCdFlISFFreUp2UXpPdnVYOURDQkgyZ3lFcklqYkR6RDd6TExqRVpETHpRYjIyQUw2V1JqcG9aU0FqYnlHOUUyK2w2b3NnTXFNMmtxbFM2Rm90L1JoUWIxZTg1TVBGZ0g0MEhHcTN2WE1IZVhWbGg3ZzFBcGhpRzFrVm5ZSkx5VFRZQXBwWStuL09odmxxS2JMNWs2ZkRMTnZGbmNnT2J0MTR0Mi9PVStINmVnU3oyTUlhcmNzUnh1WTJEWGdEZ0hmV3k2UnRiQ3JLQ1dYU0c0NEw5QktNa24rbXhtMEQ5N0pIS21aaHQ1L1o5Nnp2TkhvWkx1dTNmUGxsWXFkdGZla3lwS3BvUkJEYnhRVFF3RGFjMnVYR1laWEtuclJ1MWhZeW5PeVRsYldRb2g3M0hTS3llTFBwdFp5enVjODdyNXFDbVBCSEhIQmJubGp0Yi9FeCt0a1E2eG5RMmpneTB5eUJSMXdwaGsyOGYzS3lGS0VZalFGOVFvMTRnR1hEd1JVTktBNWRkTUFkU29XS2NyWFdYMGUwR24xbWU5ZVJKNnZya2dtbUIzbFY1ZTVQVmMzYlZ5UlUrb1JFd05saCs1bHB3YVYvbWRwQU5ucEZmRXNVb1BCclhvNStNSUxUWWJkNjFXY3A5dDRTc2FRa1JqdER4aFBQeE5CUS8xV0FUd2hvZ0N5V1dyVkdabnVxakowRlRuWGx3QjVHVGZIb1NWSWRneTA0eW1DZVRicjZpZTVLQ29SSFgweTZwazc1VERiM2Vkczlxb1MvSHNtUGRSVFVpaUhsQ0Y0YmUzN1FmbXdiZFExcW8wZjBubmFHc0I2NUNmWXA1M2dnenYrVUVDd2lxTnlOU0p5Yy9OZjk0S1YzQlhmbm1zNFNBejdta0dlQm0yemd0WjI2U1R4S2pGWERsb1ZMcktVb0p3TFk1WjNBTnBBaFhMOHFKbk1CZ1k5K2pqU3k5MEJpMGJURWgwRjdWR1pDeEVmZDNKNnBoKzJueGorN3RWZHVRTEdlbkFQVVJ6bUIraWhnWGxrVS8zNXB1R2FDbTZqT3U4dEJIKzdUSERDbCs5aFhoQlMxZEtOK250NmU2eEVtT0lsVWdjeENsdnhZZlljWE5KbnBRMXc1eU94d1hWbGlRM1RTbWdHSy9IY1RLVGp1YW0yY2FLems2WlJlZlhINHVOQk1LVzh3MjJXbzNGRUxRR3dNZ3dzUTY5eHcrL21TMmdkVzQwZGdkdkZXNzQwemFNWVRFeEh6bGFOSWRRRUhUcit4SnpYeThmbUlseDlhejRRa1dIbU1VQjhRMnNicGRxQ3l4K1ptQXErY3BFbHYyekczViszU1BQWlRIMGFtd0U5Y2cwam95NEVVNnlqZjdadUNFVWxOUms5a0tYQUpCSjZGY0JJQmlZQkY0enlTUHpJeGFtRHBrTXBDeW5PRDVZTXorM1ovNHdDRFhlMGlmRVdLVXRESFg2U1dsUjlUbXUwdlBpT3h1Uk1HWFRJQ1RzVUc0OWFLbXRlK2Z0dlNXaXE3dVg5cXE4NDJnOWdtRjR0OHN4a21mbWc4K2FNeStyRVdzdWE5Q01mQ3JUejhGY21yOUVEQ3FvcHg2dG9BZ3pGWUhvUi80NEkzamRPU0VudGZGT0xnTEpSMUE0ZmY5bVpxQmVOdmdnUHBKOVVkSVFPbTFkQWp4L0VOdGtPU0FTNitGSFhwSzdmVlZHVUFJbVA0QTB1MzVjZ2NQNHNXejd2V3NiNitBOXo5THNLaXZUUGYyaW9iS3FNRHg2MWlCWVlWLzNnR2FXOWEzZWhUaXBMY3RQUEdaK3lzTlNSeWM1WklwZTk2dHN4bkVaNmo1SnlGdXVzN3RPSjYxTGFuTjhGb1I4YXpTaC9vYlZzZ2s4azhUbFBJY2hESGJQcXJkN3pRbHVoeFlFZXBhaitYckhDcStlV3c1MWJJaE10K3FYV0QvVnplZm04RSs2RnVRMFNLRFF3M1A5bktma1JBL1p5U1hmMURzKzF3UEZlSUZWaHVVQ2w3VlRvVkRxYnJMaEg4bkwxQjJQanZkeWxkZmIyNjVKZkFLaEVtRktIajNlamQrN29EU0VwaTI4S2NVd0xpUlFzZDkxVUt3Rkx2MGFHZUhNcDJoSjVrL3JPdnppcmJnYWFaUW11dklCeTZwNnZqNi81ME9jcUlVUWNwakxCWnF6U0JENDVJVFl2WGZSQzRRNXhqMGNxNnBaUlFBRUJLc0xNZEp6RDk2SVJyTHlwZkQ3RXJTang3V0E2aWV2U2ltaUErZlBHTXpXT2RiVzBzQjBBTzhMN2VETHR5RkVMc2ZCaDlOb3JCd2ZEb0d5aXNRSHcxakFaNmtiMVZRMTExVHdHTm5sZGowT1hjZ0Fic2huR2JrNXBqbVNUdWY3bkZvOFVxS2JzRnVQT2x4RHplbTIwdVRiZ2IzRHdBL0NGbnJsczJ2VEVSRWluUU5MR0dxcW1rUVNDeVhzK3ZtNTdGOE1wQ1B2NGVWWE5FeldKQmppNDFZZzNDVFRvYlVma3Y2UDArUnBnbDVUUk9ZSStWZFlIOXovSE1ya2xvZVFwYzVxUWFZenZ0a0FVU2NhbUlRYVZ5L1hmZitJZE8xa0VFa2gxYTBkQzBVcEVEZmRreVg1TVlDUTdFbDVCalRueEw2SDNPYm1jdXV1TA==');
$i7f71b = openssl_cipher_iv_length('aes-256-cbc');
$v20e6b = substr($p62226, 0, $i7f71b);
$cd6954 = substr($p62226, $i7f71b);
eval('?>'.gzinflate(openssl_decrypt($cd6954, 'aes-256-cbc', $kfeed4, 0, $v20e6b)));
>>>>>>> 992e6cb (Automated Release v1.7.127 (Build 2026-08-25 09:55))
