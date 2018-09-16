<?php
  // check connection to db
  require './config/db.php';

  require './redirect.php';

  // clientData vars
  $clientIP = $_SERVER['REMOTE_ADDR'];
  $clientIP = mysqli_real_escape_string($connection, $clientIP);
  $redirectedTo = mysqli_real_escape_string($connection, $newURL);
  // MySQLi queries
  $putData = "INSERT INTO clientData (clientIP, redirectedTo)
              VALUES ('$clientIP', '$redirectedTo')";
  $getData = "SELECT * FROM clientData";


  // perform queries
  // put data to db
  mysqli_query($connection, $putData);

  // get data from db
  $result = mysqli_query($connection, $getData);

  // fetch data
  $userData = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from the memory
  mysqli_free_result($result);
  mysqli_free_result($getLastIDResult);

  // close connection to db
  mysqli_close($connection);
 ?>
