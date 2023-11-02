<?php
$dbHost = $_ENV['DB_HOST'];
$dbPort = $_ENV['DB_PORT'];
$dbDatabase = $_ENV['DB_DATABASE'];
$dbUser = $_ENV['DB_USER'];
$dbPassword = $_ENV['DB_PASSWORD'];

$mysqli = new mysqli($dbHost, $dbUser, $dbPassword, $dbDatabase, $dbPort);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo 'Success';
}