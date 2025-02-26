<?php
// Sample data: list of names with IDs
$names = [
    1 => "John Doe",
    2 => "Jane Smith",
    3 => "Alice Johnson",
    4 => "Bob Brown"
];

// Get the 'id' parameter from the request
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;

// Check if the ID exists in the list
if ($id && array_key_exists($id, $names)) {
    // Return the name as JSON
    header('Content-Type: application/json');
    echo json_encode(["id" => $id, "name" => $names[$id]]);
} else {
    // Return an error if the ID is not found
    header('Content-Type: application/json');
    http_response_code(404);
    echo json_encode(["error" => "Name not found"]);
}
?>
