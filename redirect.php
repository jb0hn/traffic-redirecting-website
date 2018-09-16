<?php
  // MySQLi queries
  $getLastID = "SELECT MAX(id) FROM clientData";

  // perform queries
  // get data from db
  $getLastIDResult = mysqli_query($connection, $getLastID);

  // fetch data
  $lastID = mysqli_fetch_array($getLastIDResult);

  // init vars
  $newURL = '';
  $lastID = (int)$lastID[0];

  // redirection engine 
  if ($lastID % 2 === 0) {
    $newURL = 'https://google.com';
  } else {
    $newURL = 'https://duckduckgo.com';
  }
 ?>
