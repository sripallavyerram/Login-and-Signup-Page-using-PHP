<?php
$servername = "localhost";
$username = "root";  // Default MySQL user in XAMPP
$password = "";      // Default is empty
$database = "secure_user_system"; // Updated database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
