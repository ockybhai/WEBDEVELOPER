<?php
$servername = "localhost";
$username = "23mca026";
$password = "2061";
$dbname = "23mca026";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name= $_POST["name"];
$course= $_POST["course"];
$age=$_POST["age"];
$sql = "INSERT INTO student (name, course, age)
VALUES('$name', '$course', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>