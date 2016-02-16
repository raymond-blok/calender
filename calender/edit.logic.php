<?php
require "../common/key.php";
require "../common/date.php";
if(isset($_POST['submit']))
{
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
}
else
{
	header('location: index.php');
}