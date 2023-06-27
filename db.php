<?php
require 'vendor/autoload.php'; // include Composer's autoloader

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

var_dump(getenv('MONGODB_URI'));

$client = new MongoDB\Client(getenv('MONGODB_URI'));

// List all databases
foreach ($client->listDatabases() as $database) {
    echo $database->getName() . "\n";
}

$db = $client->php_db;
?>
