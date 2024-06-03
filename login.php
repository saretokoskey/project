<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevent SQL injection
    $username = $conn->real_escape_string($username);
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Check if user exists
    $sql = "SELECT * FROM login_data WHERE username='$username' AND email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Validate password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php"); // Redirect to a welcome page
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "The user does not exist.";

    }
}

$conn->close();
?>
