<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "data";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

$action = $_POST['action'];
$date = $_POST['date'];
$time = $_POST['time'];

$sql = "INSERT INTO reports (action, date, time) VALUES ('$action', '$date', '$time')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

$sql = "SELECT action, date, time FROM reports";
$result = $conn->query($sql);

$data = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}

echo json_encode($data);

$conn->close();
?>


