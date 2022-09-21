<?php

include 'assets/_libs/includes/database.class.php';

$email = $_POST['email_address'];
$pass = $_POST['password'];

$conn = Database::getConnection();

$sql = "INSERT INTO login (email, password)
VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

?> 