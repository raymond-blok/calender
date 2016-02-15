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
	<form action="index.php" method="post">
		naam:
		<input type="text" value="<?=$birthday["person"]?>" name=""><br>
		datum:
		<input type="date" value="<?=$birthday["year"]?>-<?=$birthday["month"]?>-<?=$birthday["day"]?>">

		<button value"edit">bewerk</button>
		
	</form>
	
</body>
</html>