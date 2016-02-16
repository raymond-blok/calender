<?php
function day($birthday)
{
	for($d = 1; $d <= 31; $d++)
	{
		if($d == $birthday)
		{
			echo "<option value=$d selected>$d</option>";
		}
		else
		{
			echo "<option value=$d>$d</option>";
		}
	}
}
function month($birthday)
{
	for($m = 1; $m <= 12; $m++) 
	{
		if($m == $birthday)
		{
			echo "<option value=$m selected>$m</option>";
		}
		else
		{
			echo "<option value=$m>$m</option>";
		}
	} 
}

function year($birthday)
{
	for($y = date(Y); $y >= 1800; $y--) 
	{
		if($y == $birthday)
		{
			echo "<option value=$y selected>$y</option>";
		}
		else
		{
			echo "<option value=$y>$y</option>";
		}
	} 
}