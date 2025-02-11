<?php
$host = "db";  // Change to "db" to match Docker container
$user = "root";
$pass = "root";
$db = "mydatabase"; // Ensure this matches docker-compose.yml

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
