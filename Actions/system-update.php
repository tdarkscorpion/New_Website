<?php
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
