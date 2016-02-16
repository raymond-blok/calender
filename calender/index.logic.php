<?php
require "../common/key.php";
require "../common/month.php";
$query =  "SELECT * FROM birthdays ORDER BY month, day ASC";
$result = $db -> query($query);
$use = null;
$useday = null;
$birthdays = $result -> fetch_all(MYSQLI_ASSOC);


function testmonth($use, $useday, $month, $day)
{
	if($use != $month):
		$use = $month;
		$useday = null;
		$month = month($month);
		echo "<h1> $month </h1>";
	endif; 

	if($useday != $day):
		$useday = $day;
		echo "<h2> $day</h2>";
	endif;
	return array($use, $useday);
	
}
