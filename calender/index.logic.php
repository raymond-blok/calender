<?php
require "../common/key.php";
require "../common/month.php";
$query =  "SELECT * FROM birthdays ORDER BY month, day ASC";
$result = $db -> query($query);
$use = null;

$birthdays = $result -> fetch_all(MYSQLI_ASSOC);




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