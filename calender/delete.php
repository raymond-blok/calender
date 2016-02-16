<?php 
require("delete.logic.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../common/main.css">
	<title>Document</title>
</head>
<body>
	<h1>verjaardag verwijderen</h1>
	<p>weet je zeker dat je de verjaardag van <?=$birthday['person']?> op <?=$birthday['day']?> <?=month($birthday['month']);?> <?=$birthday['year']?> wilt verwijderen</p>
	<form action="delete.php?id=<?=$_GET['id']?>" method="post">
		<button name="yes" value="yes">ja</button>
		<button>nee</button>
	</form>

	
</body>
</html>