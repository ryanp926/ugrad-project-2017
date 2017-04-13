<?php
// INSERTING SUBSCRIBER PAGE

// Create a database connection
  $dbhost = "aa1qo18bxrq2p2l.ciurdt0cug1d.us-west-2.rds.amazonaws.com";
  $dbuser = "ilovereno";
  $dbpass = "Ilovereno123#";
  $dbname = "ebdb";

// CONNECTION TO DB ///////////////////////////////////////////////////////////

  // Connect to db and test if connection occurred.
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) 
  {
      die("Database connection failed: " . 
          mysqli_connect_error() . 
              " (" . mysqli_connect_errno() . ")"
    );
  }

  // execption handling escape characters
  $fname = addslashes( "$_POST[fname]" );  // variable name from subscriber.php
  $lname = addslashes( "$_POST[lname]" );  // variable name from subscriber.php
  $email = addslashes( "$_POST[EMAIL]" );  // variable name from subscriber.php
  $zip = addslashes( "$_POST[ZIPCODE]" );  // variable name from subscriber.php

  // checking for duplicate email
	$sql = "SELECT * FROM ilr_subscriber WHERE email = '$email' ";
	$result = mysqli_query( $connection, $sql );

	// display error message
  if( $result->num_rows > 0 )
  {
  	session_start();
  	$_SESSION["ERROR"] = 1;

  	echo "USER(S) FOUND WITH THAT EMAIL<br>" .
         "=============================<br><br>";
    while( $row = $result->fetch_assoc() ) {
          echo "<br> ID: ". $row["id"].
               " Name: ". $row["firstname"]. " ". $row["lastname"]. " ".
               " Email: ". $row["email"]. " ".
               " Zip: ". $row["zip"]. "<br>";
        }
    die( "Killing connection." . mysqli_error( $connection ) );
  }
  else
  {
  	// inserting into subscriber table with results
	  $sql = "INSERT INTO ilr_subscriber (firstname, lastname, email, zip) VALUES ( '{$fname}', '{$lname}', '{$email}', '{$zip}' )";
	  $result = mysqli_query( $connection, $sql );

	  if ($result->num_rows > 0 ) {
	    // Success
	    echo "Success! Subsciber added to ilr_subscriber DB.";
	  } else {
	    // Failure
	    die("Database query failed. " . mysqli_error($connection));
	  }
  }

  // close db connection
  mysqli_close($connection);
?>