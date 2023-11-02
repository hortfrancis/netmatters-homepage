<?php

include 'get-env-variable.php';

$server = 'localhost';
$database = 'netmatters-homepage';
$username = 'netmatters-homepage';
$password = getEnvironmentalVariable('DATABASE_PASSWORD');

// Error handling if database password is not in `.env`
if ($password === false) {
    echo "Database password not found in `.env`";
    exit;
}

try {
    $databaseConnection = new PDO("mysql:host=$server;dbname=$database", $username, $password);
} catch (PDOException $exception) {
    echo "Database connection failed: " . $exception->getMessage();
    exit;
}
