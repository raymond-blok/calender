<?php
require "../common/key.php";
require "../common/datecreate.php";
if(isset($_POST['submit'])):

	$name = $_POST['name'];
	$day = $_POST['day'];
	$month =  $_POST['month'];
	$year = $_POST['year'];

	$query =  "INSERT INTO birthdays (person, day, month, year) VALUES ('$name', '$day', '$month', '$year')";
	$result = $db -> query($query);
	header('location: index.php');
endif;
