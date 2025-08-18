<?php
$servername = "localhost";
$username = "admin";
$password = "abc123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=planty", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>