<?php
// Globale variables //////////////////////////////////////////////////////////

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

// FUNCTION TO ADD ONE SUBSCRIBER /////////////////////////////////////////////
  function addSubscriber( $first, $last, $email, $zip )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $query  = "INSERT INTO ilr_subscriber (";
    $query .= " firstname, lastname, email, zip";
    $query .= ") VALUES (";
    $query .= " '{$first}', '{$last}', '{$email}', '{$zip}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query );

    if ($result) {
      // Success
      echo "Success! Subsciber added to ilr_subscriber DB.";
    } else {
      // Failure
      die("Database query failed. " . mysqli_error($connection));
    }

    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO DELETE ONE SUBSCRIBER FROM TABLE ///////////////////////////////
  function deleteSubscriber( $id )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    // Create a database connection
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "DELETE from ilr_subscriber WHERE id = $id";
    $result = mysqli_query($connection, $query );

    if( $result )
      echo "USER DELETED <br>";

    else
      echo "DID NOT DELETE USER <br> ";
    
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO FIND ONE SUBSCRIBER IN TABLE ///////////////////////////////////
  function findSubscriber( $id )
  {
    // Create a database connection
    global $dbhost, $dbuser, $dbpass, $dbname;
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * from ilr_subscriber WHERE id = $id ";
    $result = mysqli_query($connection, $query );

    if( $result->num_rows > 0 ){
      echo "USER FOUND<br>" .
        "===========<br><br>";
      if ($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
          echo "<br> ID: ". $row["id"].
               " Name: ". $row["firstname"]. " ". $row["lastname"]. " ".
               " Email: ". $row["email"]. " ".
               " Zip: ". $row["zip"]. "<br>";
        }
      }
    }
    else {echo "DID NOT FIND USER";}
    
    // close db connection
    mysqli_close($connection);

    // return true if record added; otherwise false;
    return $row;
  }
// FUNCTION TO SHOW ALL RECORD IN DB TABLE ////////////////////////////////////
  function showAllSubscribers()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query  = "SELECT * ";
    $query .= "FROM ilr_subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT id, firstname, lastname, email, zip FROM ilr_subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ID: ". $row["id"].
                  " Name: ". $row["firstname"]. " ". $row["lastname"]." ".
                  " Email: ". $row["email"]. " ".
                  " Zip: ". $row["zip"]. "<br>";
         }
    } 

    else {
         echo "0 results";
    }
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO ADD ONE EVENT //////////////////////////////////////////////////
  //   id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  //   title VARCHAR(30) NOT NULL,
  //   start_date_time VARCHAR(29) NOT NULL,
  //   end_date_time VARCHAR(29) NOT NULL,
  //   location VARCHAR(100) NOT NULL,
  //   description VARCHAR(500) NOT NULL,
  //   phone VARCHAR(30) NOT NULL,
  //   email VARCHAR(50) NOT NULL,
  //   reg_date TIMESTAMP
  //
  //   FORMATTING:
  //   start date and time --> 02-05-2017 01:30PM
  //   end date and time --> 02-05-2017 01:30PM
  function addEvent( $title, $start_date_time, $end_date_time, 
                      $location, $description, $phone, $email )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $query  = "INSERT INTO ilr_events (";
    $query .= " title, start_date_time, end_date_time, location, ";
    $query .= "description, phone, email";
    $query .= ") VALUES (";
    $query .= " '{$title}', '{$start_date_time}', '{$end_date_time}', ";
    $query .= " '{$location}', '{$description}', '{$phone}', '{$email}' ";
    $query .= ")";
    $result = mysqli_query($connection, $query );

    if ($result) {
      // Success
      echo "Success! Event added to ilr_events DB.";
    } else {
      // Failure
      die("Database query failed. " . mysqli_error($connection));
    }

    // close db connection
    mysqli_close($connection);
}

// FUNCTION TO DELETE ONE EVENT FROM TABLE ////////////////////////////////////
  function deleteEvent( $id )
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    // Create a database connection
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "DELETE from ilr_events WHERE id = $id";
    $result = mysqli_query($connection, $query );

    if( $result )
        echo "EVENT DELETED <br>";
    else
      echo "DID NOT DELETE EVENT <br> ";
    
    // close db connection
    mysqli_close($connection);
  }

// FUNCTION TO FIND ONE EVENT IN TABLE ////////////////////////////////////////
  function findEvent( $id )
  {
    // Create a database connection
    global $dbhost, $dbuser, $dbpass, $dbname;
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $query = "SELECT * from ilr_events WHERE id = $id ";
    $result = mysqli_query( $connection, $query );

    if( $result ){
      // echo "EVENT FOUND<br>" .
      //   "===========<br><br>";
      if ($result->num_rows > 0) {
        // output data of each row
        if($row = $result->fetch_assoc()) {
          // echo "<br> ID: ". $row["id"].
          //      " Title: ". $row["title"] . " " . 
          //      " Start Time: ". $row["start_date_time"]. " ".
          //      " End Time: ". $row["end_date_time"]. " ".
          //      " Location: ". $row["location"]. " ".
          //      " Description: ". $row["description"]. " ".
          //      " Phone: ". $row["phone"]. " ".
          //      " Email: ". $row["email"]. " ". "<br>";
               return $row;
        }
      }
    }
    else {echo "DID NOT FIND EVENT";}
    
    // close db connection
    mysqli_close($connection);

    return 0;
  }

// FUNCTION TO SHOW ALL RECORD IN ilr_events TABLE ////////////////////////////
  function showAllEvents()
  {
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //MySQL query to select all events in table
    $query  = "SELECT * ";
    $query .= "FROM ilr_events ";
    $result = mysqli_query($connection, $query);

    // select all data in event record, query table, store results
    $sql  = "SELECT id, title, start_date_time, end_date_time, location,";
    $sql .= " description, phone, email FROM ilr_events";
    $result = $connection->query($sql);

    // loop through all events found and output to page
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo  "<br> ID: ". $row["id"].
              " Title: ". $row["title"]. " ". 
               " Start Time: ". $row["start_date_time"]. " ".
               " End Time: ". $row["end_date_time"]. " ".
               " Location: ". $row["location"]. " ".
               " Description: ". $row["description"]. " ".
               " Phone: ". $row["phone"]. " ".
               " Email: ". $row["email"]. " ". "<br>";
       }
    }
    else 
    {
      echo "0 events";
    }
    // close db connection
    mysqli_close($connection);
  }
// FUNCTION TO SELECT EVENTS WITHIN DATE RANGE ////////////////////////////////
  function getEventDateRange( $being, $end )
  {
    //echo $startFrom, $startStop, $endFrom, $endStop;
    global $dbhost, $dbuser, $dbpass, $dbname;

    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    $sql = "SELECT * FROM ilr_events WHERE start_date_time BETWEEN '" . $begin . "' AND '" . $end . "'";
    $result = $connection->query( $sql );

    if($result->num_rows > 0)
        return $result;
    else 
      echo "0 events";

    // close db connection
    mysqli_close( $connection );
    return 0;
  }
// CREATE SUBSCRIBER TABLE ////////////////////////////////////////////////////
/*
  // Routine to create events table in db
  $sql = "CREATE TABLE ilr_subscriber (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    zip VARCHAR(15) NOT NULL,
    reg_date TIMESTAMP )";

  // Test if table was successfully created and report
  if ($connection->query($sql) === TRUE) {
    echo "Table ilr_subscriber created successfully";
  }
  else {
    echo "Error creating table: " . $connection->error;
  }
*/
// DELETE TABLE ///////////////////////////////////////////////////////////////
/*
  // Routine to delete table from db
  $sql = "DROP TABLE ilr_subscriber ";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval ) {
    die('Could not delete table: ' . mysqli_error());
  }
  echo "Table deleted successfully\n";
*/
?>
<?php
// CREATE EVENTS TABLE IN DATABASE ////////////////////////////////////////////
/*
  // FORMATTING:
  //   start date and time --> 02-05-2017 01:30PM
  //   end date and time --> 02-05-2017 01:30PM
  //
  $sql = "CREATE TABLE ilr_events (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  title VARCHAR(30) NOT NULL,
  start_date_time VARCHAR(29) NOT NULL,
  end_date_time VARCHAR(29) NOT NULL,
  location VARCHAR(100) NOT NULL,
  description VARCHAR(500) NOT NULL,
  phone VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  reg_date TIMESTAMP
  )";

  if ($connection->query($sql) === TRUE) {
    echo "Table ilr_events created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }
*/
// DELETE EVENTS TABLE FROM DATABASE //////////////////////////////////////////
/*
// MySQL to delete table
  $sql = "DROP TABLE ilr_events";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval )
  {
  die('Could not delete ilr_events table: ' . mysqli_error());
  }
  echo "ilr_events table deleted successfully\n";
*/
?>
<?php
// TESTING CODE FROM INITIAL IMPLEMENTATION ///////////////////////////////////
/*
  // Subscriber insert test 1
  $fname = "Ray";
  $lname = "Pistoresi";

  $query  = "INSERT INTO ilr_subscriber (";
  $query .= " firstname, lastname";
  $query .= ") VALUES (";
  $query .= " '{$fname}', '{$lname}' ";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
  }

  // Subscriber insert test 2
  $fname = "Rene";
  $lname = "Flores";
  
  // 2. Perform database query
  $query  = "INSERT INTO ilr_subscriber (";
  $query .= " firstname, lastname";
  $query .= ") VALUES (";
  $query .= " '{$fname}', '{$lname}' ";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
  }
*/

// END PHP SECTION ////////////////////////////////////////////////////////////
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>


	</body>
</html>
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>