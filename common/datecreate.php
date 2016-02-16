<?php
require "../common/month.php";
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
		$mt = monthselect($m);
		echo "<option value=$m>$mt</option>";
	} 
}

function year()
{
	for($y = date(Y); $y >= 1800; $y--) 
	{
		echo "<option value=$y>$y</option>";
	} 
}