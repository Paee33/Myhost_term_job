<?php
$servername = "localhost";
$username = "root";
$password = ""; //

try {
  $conn = new PDO("mysql:host=$servername;dbname=work_db;charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    date_default_timezone_set('Asia/Bangkok');
?>
