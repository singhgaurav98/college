<?php
$server = "localhost";
$username = "root";
$passoward= "";
$database = "college";

$conn = new mysqli($server,$username,$passoward,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>
