<?php
 
  $db = new mysqli("localhost","root","","portfolio");

  if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
?>