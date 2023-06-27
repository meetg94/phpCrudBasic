<?php
include '../db.php';

$collection = $db->php_db_collection1; // use your collection name here

$data = array("title" => "Hello, MongoDB!", "content" => "Creating data using PHP driver for MongoDB");
$result = $collection->insertOne($data);

echo "Inserted document with id: " . $result->getInsertedId();
?>
