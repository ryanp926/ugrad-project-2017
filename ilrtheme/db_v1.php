<?php
// Globale variables ////////////////////////////////////////////////////////////////////////////////////////

  // Create a database connection
  $dbhost = "aa1qo18bxrq2p2l.ciurdt0cug1d.us-west-2.rds.amazonaws.com";
  $dbuser = "ilovereno";
  $dbpass = "Ilovereno123#";
  $dbname = "ebdb";

// CONNECTION TO DB /////////////////////////////////////////////////////////////////////////////////////////

/*
  // Connect to db and test if connection occurred.
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  if(mysqli_connect_errno()) 
  {
      die("Database connection failed: " . 
          mysqli_connect_error() . 
              " (" . mysqli_connect_errno() . ")"
    );
  }
*/

// DELETE TABLE /////////////////////////////////////////////////////////////////////////////////////////////

/*
  // Routine to delete table from db
  $sql = "DROP TABLE Subscriber ";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval ) {
    die('Could not delete table: ' . mysqli_error());
  }
  echo "Table deleted successfully\n";
*/

// CREATE TABLE /////////////////////////////////////////////////////////////////////////////////////////////
 
/*
  // Routine to create table to db
  $sql = "CREATE TABLE Subscriber (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    zip VARCHAR(15) NOT NULL,
    reg_date TIMESTAMP )";

  // Test if table was successfully created and report
  if ($connection->query($sql) === TRUE) {
    echo "Table Subscriber created successfully";
  }
  else {
    echo "Error creating table: " . $connection->error;
  }

*/

// INSERT ONE RECORD ////////////////////////////////////////////////////////////////////////////////////////

/*
  // Inserting two records into Subscriber table
  $fname = "Ray";
  $lname = "Pistoresi";

  $query  = "INSERT INTO Subscriber (";
  $query .= " firstname, lastname";
  $query .= ") VALUES (";
  $query .= " '{$fname}', '{$lname}' ";
  $query .= ")";

  $result = mysqli_query($connection, $query);

  if ($result) {
    // Success
    // redirect_to("somepage.php");
    echo "Success!";
  } 
  else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed. " . mysqli_error($connection));
  }

  // Second insertion
  $fname = "Rene";
  $lname = "Flore";

  $query  = "INSERT INTO Subscriber (";
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

// DISPAY ALL TABLE ROWS ////////////////////////////////////////////////////////////////////////////////////

/*
    $query  = "SELECT * ";
    $query .= "FROM Subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT id, firstname, lastname FROM Subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ID: ". $row["id"]. " Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
         }
    } 

    else {
         echo "0 results";
    }
*/

// FUNCTION TO ADD ONE SUBSCRIBER ///////////////////////////////////////////////////////////////////////////

/*
  function addSubscriber( $first, $last, $email, $zip ) {

    global $dbhost, $dbuser, &dbpass, $dbname;

    // Connect to db and test if connection occurred.
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
      die("Database connection failed: " . 
           mysqli_connect_error() . 
           " (" . mysqli_connect_errno() . ")"
      );

    // Insert record into table, id number is autoindexed upon add
    $query = "INSERT INTO Subscriber ( firstname, lastname, email, zip ) ";
    $query .= "VALUES ( '{$first}', '{$last}', '{$email}', '{$zip}' )";
    $result = mysqli_query($connection, $query );

    // close db connection
    mysqli_close($connection);

    // return true if record added; otherwise false;
    return $result;
  }
*/

// FUNCTION TO SHOW ALL RECORD IN DB TABLE /////////////////////////////////////////////////////////////////

/*
  function showAllSubscribers( $table ) {

    global $dbhost, $dbuser, &dbpass, $dbname;

    // Connect to db and test if connection occurred.
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(mysqli_connect_errno()) {
      die("Database connection failed: " . 
           mysqli_connect_error() . 
           " (" . mysqli_connect_errno() . ")"
      );
    
    $query  = "SELECT * ";
    $query .= "FROM Subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT id, firstname, lastname FROM Subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ID: ". $row["id"]. " Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
         }
    } 

    else {
         echo "0 results";
    }
*/

/*
  // testing call of addSubscriber()
  $first = "DAVID";
  $last = "FLORES";
  $ema = "FLORESRENE30@YAHOO.COM";
  $zi = "89027";

  $result2 = addSubscriber( $first, $last, $ema, $zi);

    if( $result2)
      echo "WORKED";
    else
      echo "DIDNT";

    $query  = "SELECT * ";
    $query .= "FROM Subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT id, firstname, lastname FROM Subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> ID: ". $row["id"]. " Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
         }
    } 

    else {
         echo "0 results";
    }


  /*
    $query  = "DELETE ";
    $query .= "FROM Subscriber WHERE firstname = 'Rene' ";
    $result = mysqli_query($connection, $query);
    
    //THere is a delay when deleting records from table 

    $query  = "SELECT * ";
    $query .= "FROM Subscriber ";
    $result = mysqli_query($connection, $query);
    $sql = "SELECT firstname, lastname FROM Subscriber";
    $result = $connection->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
             echo "<br> Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
         }
    } 

    else {
         echo "0 results";
    }

  */
?>



<?php
/*
  // MySQL to delete table
  $sql = "DROP TABLE MyGuests";
  $retval = mysqli_query( $sql, $connection );
  if(! $retval )
  {
  die('Could not delete table: ' . mysqli_error());
  }
  echo "Table deleted successfully\n";

  // FORMATTING:
  //   start date and time --> 02-05-2017 01:30PM
  //   end date and time --> 02-05-2017 01:30PM
  //
  $sql = "CREATE TABLE Events (
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
    echo "Table Events created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }

  $sql = "CREATE TABLE Subscriber (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  zip VARCHAR(15) NOT NULL,
  reg_date TIMESTAMP
  )";

  if ($connection->query($sql) === TRUE) {
    echo "Table Subscriber created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }
*/
?>

<?php
/*
  // Subscriber insert test 1
  $fname = "Ray";
  $lname = "Pistoresi";

  $query  = "INSERT INTO Subscriber (";
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
  $query  = "INSERT INTO Subscriber (";
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

// END PHP SECTION //////////////////////////////////////////////////////////////////////////////////////////
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