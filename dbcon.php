<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'vote';

$conn = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
