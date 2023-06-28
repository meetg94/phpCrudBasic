<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../models/Student.php';

header('Content-Type: application/json');
$collection = $db->first_php_db;

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $data = json_decode(file_get_contents('php://input'), true);
    $id = $data['_id'];

    $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

    echo json_encode(['status' => 'success', 'message' => 'Student deleted']);
}
else {
    http_response_code(405);  // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
