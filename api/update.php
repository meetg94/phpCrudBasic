<?php
include '../db.php';

$collection = $db->php_db_collection1; // use your collection name here

$updateResult = $collection->updateOne(
    ['title' => 'Hello, MongoDB!'], 
    ['$set' => ['title' => 'Hello, MongoDB and PHP!']]
);

printf("Matched %d document(s)\n", $updateResult->getMatchedCount());
printf("Modified %d document(s)\n", $updateResult->getModifiedCount());
?>
