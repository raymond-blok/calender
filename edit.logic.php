<?php
require "common/key.php";

if(isset($_POST['submit']))
{
	require "common/key.php";
	$id = $_GET['id'];
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month =  $_POST['month'];
	$year = $_POST['year'];

	$query = "UPDATE birthdays SET person='$name', day= '$day', month= '$month', year= '$year'  WHERE id=$id";
	$result = $db -> query($query);
	header('location: index.php');

}
elseif(is_numeric($_GET['id']))
{
	$query =  "SELECT * FROM birthdays WHERE id=$_GET[id]";
	$result = $db -> query($query);

	$birthday = $result -> fetch_assoc();

	function day()
	{
		for($d = 1; $d <= 31; $d++) 
		{
			echo "<option value=$d>$d</option>";
		} 
	}

	function month()
	{
		for($m = 1; $m <= 12; $m++) 
		{
			echo "<option value=$m>$m</option>";
		} 
	}

	function year()
	{
		for($y = date(Y); $y >= 1900; $y--) 
		{
			echo "<option value=$y>$y</option>";
		} 
	}
}
else
{
	header('location: index.php');
}