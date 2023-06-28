<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../models/Student.php';

header('Content-Type: application/json');
$collection = $db->first_php_db;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $students = $collection->find()->toArray();
    echo json_encode(['status' => 'success', 'data' => $students]);
}
else {
    http_response_code(405);  // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>
