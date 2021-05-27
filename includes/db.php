<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DB";

// Creation de la connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Verification du coonection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
