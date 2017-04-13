<?php /* file to test out db_v2.php routines */
	$first = "Ray";
	$last = "Pistoresi";
	$email = "trptman20@gmail.com";
	$zip = "89506";
	$db = "ilr_subscriber";

	include "db_v2.php";
	//showAllSubscribers();
	//echo "BEFORE ADD()";
	//addSubscriber( $first, $last, $email, $zip );
	//echo "AFTER ADD()";
	//showAllSubscribers();
	//deleteSubscriber(2);
	//echo "AFTER DELETE()";
	//showAllSubscribers();

///////////////////////////////////////////////////////////////////////////////

	// $title = "Ryan's Party";
	// $start_date_time = "05\-05\-2017 07:30PM";
	// $end_date_time = '05';
	// $location = 'UNR';
	// $description  = 'Party';
	// $phone = '800';
	// $email = 'workingirl@hotmail.com';

	//showAllEvents();
	//findEvent( 1 );
	// // echo "<br> BEFORE EVENT ADD() <br>";
	// addEvent( $title, $start_date_time, $end_date_time, $location, $description, $phone, $email );
	// // echo "<br> AFTER EVENT ADD() <br>";
	//showAllEvents();
	// echo "<br> BEFORE DELETE() <br>";
	// deleteEvent(1);
	// deleteEvent(2);
	// deleteEvent(10);
	// deleteEvent(11);

	// echo "<br> AFTER DELETE() <br>";
	getEventDateRange( "03-01-2017", "03-32-2017" );
	showAllEvents();

?>