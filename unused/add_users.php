<?php
// Database connection
$servername = "172.17.0.4";
$username = "wwago"; // Your MySQL username
$password = "bodenkapsel"; // Your MySQL password
$database = "database"; // Your database name
$port = "3306"; // Your MySQL port
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User data
$username = "test_user"; // Change this to your desired username
$password = "test_password"; // Change this to your desired password

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

if ($conn->query($sql) === TRUE) {
    echo "User added successfully.";
} else {
    echo "Error adding user: " . $conn->error;
}

$conn->close();
?>