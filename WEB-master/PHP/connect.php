<?php
$conn = new mysqli("localhost","root","","csdl_thuoctay");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>