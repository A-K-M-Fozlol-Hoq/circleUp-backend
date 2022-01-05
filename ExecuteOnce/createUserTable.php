<?php
$servername = "localhost";
$username = "circleupDev1";
$password = "goodmorning";
$dbname = "circleUP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE allUsersSummary (
id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(50),
__password VARCHAR(50),
userType VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table createUserTable created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>