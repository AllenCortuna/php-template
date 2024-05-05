<?php
// Database connection parameters
$servername = "localhost";
$username = "username";
$password = "password";
$database = "dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform SQL queries or operations here

// Close connection
$conn->close();
?>
