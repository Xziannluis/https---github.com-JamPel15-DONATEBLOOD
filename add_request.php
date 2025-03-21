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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $blood_type = $_POST['blood_type'];
    $location = $_POST['location'];

    // Handle Image Uploads
    $id_front = file_get_contents($_FILES['id_front']['tmp_name']);
    $id_back = file_get_contents($_FILES['id_back']['tmp_name']);

    // Prepare SQL Statement
    $stmt = $conn->prepare("INSERT INTO requests (name, birthdate, gender, contact, blood_type, location, id_front, id_back) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $name, $birthdate, $gender, $contact, $blood_type, $location, $id_front, $id_back);

    if ($stmt->execute()) {
        echo "<script>alert('Request submitted successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Error submitting request!'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "<script>alert('Invalid request method!'); window.history.back();</script>";
}
?>
