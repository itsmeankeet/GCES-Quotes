<?php

$conn = mysqli_connect("localhost","root","","gces");

if (mysqli_connect_error()) {
    echo ("Connection failed: " . $conn->connect_error());
    exit();
  }
  echo "Connected successfully";
?>