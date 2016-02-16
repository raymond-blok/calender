<?php 
require("edit.logic.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bewerken</title>
	<link rel="stylesheet" type="text/css" href="../common/main.css">
</head>
<body>
	<h1><?=$birthday["person"]?></h1>
	<form action="edit.php?id=<?=$_GET["id"]?>" method="post">
		naam:
		<input type="text" value="<?=$birthday["person"]?>" name="name"><br>
		datum:
		<select name="day">
			<?=day($birthday['day']);?>
		</select>

		<select name="month">
			<?=month($birthday['month']);?>
		</select>

		<select name="year">
			<?=year($birthday['year']);?>
		</select>

		<button value"edit" name="submit">bewerk</button>
		
	</form>
	
</body>
</html>