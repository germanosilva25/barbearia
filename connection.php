<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intranet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, documento FROM users";
$result = $conn->query($sql);
$conn->close();
?> 