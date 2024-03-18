<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudtwo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// query to create table
$sql = "CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  password VARCHAR(50) NOT NULL,
  phone INT NOT NULL,
  gender VARCHAR(10),
  hobby VARCHAR(20),
  message VARCHAR(200),
  file varchar(20) DEFAULT NULL,
  grade varchar(100)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>