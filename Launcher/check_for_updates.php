<?php
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
