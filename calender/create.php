<?php 
require("create.logic.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Toevoegen</title>
	<link rel="stylesheet" type="text/css" href="../common/main.css">
</head>
<body>
	<h2>wilt u het onderstaande toevoegen?</h2>
	<form action="create.php" method="post">
		naam:
		<input type="text" name="name"><br>
		datum:
		<select name="day">
			<?=day();?>
		</select>

		<select name="month">
			<?=month();?>
		</select>

		<select name="year">
			<?=year();?>
		</select>

		<button value"create" name="submit">toevoegen</button>
		
	</form>
	
</body>
</html>