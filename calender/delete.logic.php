<?php
require "../common/key.php";
require "../common/month.php";
if(isset($_POST['yes']))
{
	$id = $_GET['id'];
	$query = "DELETE FROM birthdays WHERE id=$id";
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