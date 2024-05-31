<?php
$servername = "localhost"; // If MySQL is running on your local machine
$username = "root"; // Default username for MySQL in XAMPP
$password = ""; 
$database = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>


