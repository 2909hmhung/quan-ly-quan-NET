<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "quanlykhachsan";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
$conn -> set_charset('utf8');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
