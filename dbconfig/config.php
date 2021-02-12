<?php
$conn = new mysqli("localhost","root","","user");

if ($conn -> connect_errno) {
  die("Connection failed: " . $conn -> connect_error);
  exit();
}


?>