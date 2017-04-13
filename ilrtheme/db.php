<?php
  // 1. Create a database connection
  $dbhost = "aa1qo18bxrq2p2l.ciurdt0cug1d.us-west-2.rds.amazonaws.com";
  $dbuser = "ilovereno";
  $dbpass = "Ilovereno123#";
  $dbname = "ebdb";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
  // sql to create table
  $sql = "CREATE TABLE MyGuests (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP
  )";

  if ($connection->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $connection->error;
  }
?>

<?php
  $id = 123;
  $fname = "Ray";
  $lname = "Pistoresi";
  
  // 2. Perform database query
  $query  = "INSERT INTO MyGuests (";
  $query .= "  id, firstname, lastname";
  $query .= ") VALUES (";
  $query .= "  {$id}, '{$fname}', '{$lname}' ";
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
?>

<?php
  
  // 2. Perform database query
  $query  = "SELECT * ";
  $query .= "FROM MyGuests ";
  $result = mysqli_query($connection, $query);
  echo $result;
  // Test if there was a query error
  if (!$result) {
    die("Database query failed.");
  }

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $connection->query($sql);
if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
     }
} else {
     echo "0 results";
}
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