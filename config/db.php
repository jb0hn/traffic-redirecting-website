<?php
  // MySQLi connection variables example - localhost
  // $hostName = 'localhost';
  // $username = 'root';
  // $password = '';
  // $dbName = 'db-redirect';

  // MySQLi connection variables - server
  $hostName = '<host_name>';
  $username = '<database_username>';
  $password = '<database_password>';
  $dbName = '<database_name>';


  // create connection to MySQLi

  $connection = mysqli_connect($hostName, $username, $password, $dbName);

  // check the connection
  if (!$connection) {
    die("Connection Error: " . mysqli_connect_errno());
  }
 ?>
