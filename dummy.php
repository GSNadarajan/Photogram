<?php

$email = $_POST['email_address'];
$pass = $_POST['password'];

// print_r ($_POST);

$servername = "mysql.selfmade.ninja";
$username = "Nadarajan";
$password = "Venkadesh@gs";
$dbname = "Nadarajan_photogram";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO login (email, password)
VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?> -->