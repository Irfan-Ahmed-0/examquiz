<?php
// Database configuration
$servername = "localhost"; // Change to your database server name if not localhost
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$database = "quiz_db"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
