<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../models/Student.php';

headers('Content-Type: application/json');
$collection = $db->first_php_db;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $student = new Student($data['name'], $data['major'], $data['subjects']);
    $result = $collection->insertOne($student->to_array());

    echo json_encode(['status' => 'success', 'message' => 'Student added', 'data' => $student->to_array()]);
}
else {
    http_response_code(405);
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method']);
}
?>