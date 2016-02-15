<?php
require "common/key.php";
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