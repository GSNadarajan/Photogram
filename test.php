<?php


$user = $_POST['username'];
$email = $_POST['email_address'];
$pass = $_POST['password'];
$phone = $_POST['phone'];

print_r($_POST);
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
// else{
//     echo "connection success";
// }

$sql = "INSERT INTO authentication (username, email, phone , password)
VALUES ('$user', '$email', '$phone' , '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>