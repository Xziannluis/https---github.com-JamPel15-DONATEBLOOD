<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_connect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO donations (user_id, blood_type, quantity) VALUES (?, ?, ?)");
$stmt->bind_param("isi", $user_id, $blood_type, $quantity);

// Set parameters and execute
$user_id = 1; // Replace with actual user ID
$blood_type = $_POST['blood_type'];
$quantity = 1; // Replace with actual quantity
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
