<?php
$host="localhost";
$username="root";
$password="";
$db="tour";

// Create connection
$con = mysqli_connect($host, $username, $password,$db);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

?>