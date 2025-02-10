<?php
$host = "localhost";
$user = "root";  // Change if needed
$pass = "";      // Change if needed
$db = "crud_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Error connecting"; // <-- Missing semicolon fixed
    die(json_encode(["error" => "Database connection failed"]));
}
header("Content-Type: application/json");
?>
