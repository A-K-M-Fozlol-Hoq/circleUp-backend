<?php
$servername = "localhost";
$username = "circleupDev1";
$password = "goodmorning";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>