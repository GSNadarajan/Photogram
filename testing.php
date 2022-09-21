


<?php



$fname = $_POST['fname'];
$lname = $_POST['lname'];

// print_r($_POST);

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

$sql = "INSERT INTO dummy (fname, lname)
VALUES ('$fname', '$lname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>