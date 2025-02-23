<?php
// Set the content type to JSON
header('Content-Type: application/json');

// Define the current version of your app
$app_name = "my app";
$current_version = 2;

// You can also fetch this information from a database or configuration file if needed
$response = array(
    "app" => $app_name,
    "version" => $current_version
);

// Send the JSON response
echo json_encode($response);
?>
