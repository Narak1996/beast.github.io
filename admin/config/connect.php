<?php 
error_reporting(0);
  $conn=new mysqli("localhost","root","","mama_db");
  if ($conn->errno) {
    die('error: cant conntect to database');
  }
  else{
    $conn->query("SET NAMES UTF8");
  }
 ?>