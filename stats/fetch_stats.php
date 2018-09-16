<?php
  // check connection to db
  require '../config/db.php';

  // MySQLi queries
  $getData = "SELECT * FROM clientData";
  $getLastID = "SELECT MAX(id) FROM clientData";

  // perform queries
  // get data from db
  $getDataResult = mysqli_query($connection, $getData);
  $getLastIDResult = mysqli_query($connection, $getLastID);

  // fetch data
  $userData = mysqli_fetch_all($getDataResult, MYSQLI_ASSOC);
  $lastID = mysqli_fetch_array($getLastIDResult);

  // free result from the memory
  mysqli_free_result($getDataResult);

  // close connection to db
  mysqli_close($connection);
 ?>
