<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../models/Student.php';

header('Content-Type: application/json');
$collection = $db->first_php_db;

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['_id'];
    unset($data['_id']);

    $result = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)], 
        ['$set' => $data]
    );

    echo json_encode(['status' => 'success', 'message' => 'Student updated', 'data' => $data]);
}
else {
    http_response_code(405);  // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
