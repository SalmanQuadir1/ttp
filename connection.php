<?php 
$servername = "35.213.177.159";
$username = "u6htx90tztj7q";
$password = "Stie@6cmms6";
$dbname = "dbygouw8jqxw5z";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
