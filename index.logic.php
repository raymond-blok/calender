<?php
require "common/key.php";

$query =  "SELECT * FROM birthdays ORDER BY month, day ASC";
$result = $db -> query($query);
$use = null;

$birthdays = $result -> fetch_all(MYSQLI_ASSOC);
function month($birthday)
{
	switch ($birthday) {
		case 1:
			$month = "January";
			break;
		case 2:
			$month = "February";
			break;
		case 3:
			$month = "March";
			break;
		case 4:
			$month = "April";
			break;
		case 5:
			$month = "May";
			break;
		case 6:
			$month = "June";
			break;
		case 7:
			$month = "July";
			break;
		case 8:
			$month = "August";
			break;
		case 9:
			$month = "September";
			break;
		case 10:
			$month = "October";
			break;
		case 11:
			$month = "November";
			break;
		case 12:
			$month = "December";
			break;
	}
		return $month;
}


/*
				if($use != $birthday['month']):
					$use = $birthday['month'];
					$useday = null;
					echo "<h1> $month </h1>";
				endif; 

				if($useday != $birthday['day']):
					$useday = $birthday['day'];
					echo "<h2> $birthday[day] </h2>";
				endif;
				*/ 