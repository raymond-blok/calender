<?php 
require("edit.logic.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bewerken</title>
	<link rel="stylesheet" type="text/css" href="common/main.css">
</head>
<body>
	<h2>wilt u het onderstaande bewerken?</h2>
	<form action="edit.php?id=<?=$_GET["id"]?>" method="post">
		naam:
		<input type="text" value="<?=$birthday["person"]?>" name="name"><br>
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

		<button value"edit" name="submit">bewerk</button>
		
	</form>
	
</body>
</html>