<?php
<<<<<<< HEAD
if (session_status() === PHP_SESSION_NONE) { session_start(); }
require_once __DIR__ . '/../include/config.php';
require_once __DIR__ . '/../Functions/UpdateHandler.php';

header('Content-Type: application/json');

// Only allow Administrators (PV 9) to perform system updates
if (!IsAdministrator()) {
    echo json_encode(['status' => 'error', 'message' => 'Unauthorized access.']);
    exit;
}

$method = $_GET['method'] ?? 'check';

switch ($method) {
    case 'check':
        $status = UpdateHandler::GetUpdateStatus();
        if ($status['status'] === 'error') {
            echo json_encode([
                'status' => 'error',
                'message' => $status['message'] ?? 'Could not reach update server.',
                'current_version' => $status['local_version'] ?? 'unknown',
                'latest_version' => $status['remote_version'] ?? 'unknown'
            ]);
        } else if ($status['status'] === 'success' && $status['available'] === true) {
            echo json_encode([
                'status' => 'update_available',
                'current_version' => $status['local_version'],
                'latest_version' => $status['remote_version']
            ]);
        } else {
            echo json_encode([
                'status' => 'up_to_date',
                'current_version' => $status['local_version'] ?? 'unknown',
                'latest_version' => $status['remote_version'] ?? ($status['local_version'] ?? 'unknown')
            ]);
        }
        break;

    case 'update':
        $remote_version_data = UpdateHandler::GetRemoteUpdateData();
        if ($remote_version_data) {
            $result = UpdateHandler::RunUpdate($remote_version_data);
            if ($result['success']) {
                if (isset($_GET['redirect'])) {
                    header("Location: ../index.php?update=success");
                    exit;
                }
                echo json_encode(['status' => 'success', 'message' => 'System updated successfully!']);
            } else {
                echo json_encode([
                    'status' => 'error', 
                    'message' => $result['message'],
                    'errors' => $result['errors']
                ]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Could not fetch update data.']);
        }
        break;

    case 'verify':
        echo json_encode(UpdateHandler::VerifyIntegrity());
        break;

    case 'db_sync':
        if (function_exists('EnsureAllDatabaseTablesExist')) {
            $ok = EnsureAllDatabaseTablesExist();
            if ($ok) {
                if (isset($_GET['redirect'])) {
                    header("Location: ../dashboard.php?page=admin&action=systemSettings&db_sync=success");
                    exit;
                }
                echo json_encode(['status' => 'success', 'message' => 'Database tables and schemas updated successfully!']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to synchronize database tables.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Migration handler not found.']);
        }
        break;

    default:
        echo json_encode(['status' => 'error', 'message' => 'Invalid method.']);
        break;
}
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf8af4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbb5ad = base64_decode('EQpRMvNB+IqzTfpN9IMGbFVLcHZaL3p4QTNyQ1RuZi9VeXZ2SzJNUW9kMGR5UUhoTmI0bUNwRkc0MUhqR2JuZkFWcFZueGdzMUNOelk3aVBwRkswYzdabGlqU3NjVjNPZ1hZYW9hT2ZmL2pOY051M3phZ3hZclk3NTRrcnJ4bUNUaXdScTZ1cFJRaWxPVG1ZMVlzbnA0bFhacmVaaXVndmJzOVQwUmhUTGFMdnBTWHZ1aDFMNzc3VE9EY2VPWHhkc2NMdjArMDRjV2o3TUNzMkxpYU5Kc0pYQkdkZEpLNWk4MnQ2KzVpU2lJcDJxRElvK2tiRnJIT2JYVWVKb3VNV1hPZEd0cnFicjdlZ1hqNDBsMThyN1VTZmpsVnBvMzRtcXVFWkhoR2o1VHpCVDd1Q1hCdlZsbSt1MFhEaVRjb01lS2hjS0o4b2tFSWdsejRDK1Awd2JlQ2sxMXhhdmw5VXA4RU1xNGdtaExFNkRNL0xvd0Rna2V2eXJlSnp6VGNQU2c5K0dlMUhmcUhPL1lldS9kT0RMVFBwdDdJVnozeVptRTAvcmV0RlF4aVZDd252bHpwN3J0K1c3TXlXQmp3RDUyTThRa09qUWx3SDVWa2dHY3BNdkd5YVBGbXh2UnZyd1hxYk9uOUdTNitlaWZHRThxTWJlS1dodWtqdHlubkVpUFh4MEFUSTByRDRLbjRDYTk1MitwQmt0c3lZR2pORFRhVkpjaUd2NXBjZldENUZUSEtkZmZFRGplSEF0amF1Q2dvY2xmdm1IQ2hEUkxKRmJnbG9UeTJSdTRDQzJYajUwRTZPcXVaNFpsT2RyY1JhYVZpQ25JalU5R25WaFFEc1RUT3B6cXl0aGNGd0p2NGFxUU92STJYZFBESEwxSDNmTm1XQ0JndzRXUVlwaHlIWVNyekR4VnZCUmxNNUlFcU40alVZN1lOdFRpaTIzeFdwSFAycTdJbUdyUlVQNEp4M1RIS2RYcjUrSG1TZ2RBR3Z4MVBTZWVvWnhBTWVvMFNDc0N0TWU5SEV4b1dxaVJXeFh1YkxEVC9mdWhzUnMzQ3BjdFYvbEE2dkNLVzVxTW1uREFCR0l4NkZUT2hSRytyalc2UTNHKzRTWEFTZEhwSUJibHBYemtyY25TSTZqeVJSWXJSaHdwMmtNSVNtaXpXMnBvRUp3MzVPaFpETFVnK2htRE5tVDdQdzFnalFMU0dqai8rVEdFTS9VQldzOUU0dC94amZmWFRVS3VnOEM4SW1vRlE0bVhucjY3TU95dGxFUmdnbWV4VnNWelYvNi9vNXh2Vjh0c0ZtaFM3QkRQYVBJenErS3hlUC9EanRSUUhuMkowRXNiQTdSdnNoTkRKd1hVMVNicmFjaWNUUEhiUDFrdHdESDFGMjFGNnNWY0dVeHRXZk1WN2pXTnhZSm9HbEpGcmtCWkNXbC9kb1pkbjR5OUpEZTFHUHhDNUZwWTZYV1hXK0NxQ2F0ZUFEQ25QUXdsUFdhSTB1THFBODlIK0lmSjA3QnBzWFY1M05SWWdPYnRYZC8xS1Z2Yk1FU2pvR25vRVRaeU1uMUlicWFFeUVOWURPNXFnZWZ4MXBaMDBJemlJVWNiMXNiS2VkWnowZHAwUXU2MUpKVDBhbHVpdzM=');
$i4d2b2 = openssl_cipher_iv_length('aes-256-cbc');
$ve2378 = substr($pbb5ad, 0, $i4d2b2);
$c3e13c = substr($pbb5ad, $i4d2b2);
eval('?>'.gzinflate(openssl_decrypt($c3e13c, 'aes-256-cbc', $kf8af4, 0, $ve2378)));
>>>>>>> 992e6cb (Automated Release v1.7.127 (Build 2026-08-25 09:55))
