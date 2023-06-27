<?php
include '../db.php';

$collection = $db->php_db_collection1; // use your collection name here

$deleteResult = $collection->deleteOne(['title' => 'Hello, MongoDB and PHP!']);

printf("Deleted %d document(s)\n", $deleteResult->getDeletedCount());
?>
