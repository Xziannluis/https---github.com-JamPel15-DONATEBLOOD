<?php
$host = "localhost"; // Server (localhost kung local)
$user = "root"; // Username sa MySQL
$pass = ""; // Password sa MySQL (Empty sa XAMPP)
$dbname = "blood_connect"; // Pangalan sa database

$conn = new mysqli($host, $user, $pass, $dbname);

// I-check kung successful ang connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
