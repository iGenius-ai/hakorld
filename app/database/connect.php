<?php

  $host = "server149";
  $user = "hakoqbrn_hakorld";
  $pass = "HakorldAdminWebmaster771221#A+bs";
  $dbName = "hakoqbrn_hakorld";

  $conn = new MySQLi($host, $user, $pass, $dbName);

  if ($conn->connect_error) {
    die("Conection failed: " . $conn->connect_error);
  }

?>
