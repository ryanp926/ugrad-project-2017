<?php
  include 'db_v2.php';

  // execption handling escape characters
  $title= addslashes("$_POST[title]");
  $start_date_time = addslashes("$_POST[start_date_time]");
  $end_date_time = addslashes("$_POST[end_date_time]");
  $location = addslashes("$_POST[location]");
  $description = addslashes("$_POST[description]");
  $phone = addslashes("$_POST[phone]");
  $email = addslashes("$_POST[email]");

  addEvent($title, $start_date_time, $end_date_time, $location, $description, $phone, $email);
?>