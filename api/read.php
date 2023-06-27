<?php
include '../db.php';

$collection = $db->php_db_collection1; // use your collection name here

$cursor = $collection->find();

foreach($cursor as $document) {
    var_dump($document);
}
?>
