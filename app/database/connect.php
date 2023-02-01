<?php

  $host = "localhost";
  $user = "root";
  $pass = "@Restoration72";
  $dbName = "hakorld";

  $conn = new MySQLi($host, $user, $pass, $dbName);

  if ($conn->connect_error) {
    die("Conection failed: " . $conn->connect_error);
  }

?>