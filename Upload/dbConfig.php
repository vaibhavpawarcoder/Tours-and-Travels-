<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "tour";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

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