


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
$sql = "UPDATE `duplicate` SET
`id` = '1',
`fname` = 'hello',
`lname` = 'world'
WHERE `id` = '1';";

if ($conn->query($sql) === TRUE) {
?>


<main class="">
  <div class="container bg-primary text-white">
    <h1 class="mt-5">Record updated Successfully</h1>
    <p class="lead">This is a simple registration form using php and mysql</p>
    
  </div>
</main>







<?
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>