<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "","data");

// Check connection
if (!$conn) {
  echo "Connection Failed!";
}

?>
