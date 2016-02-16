<?php 
	require_once "index.logic.php";
?>
<!doctype html>

<html>
	<head>
		<title>Verjaardagskalender</title>
        <link href="../common/main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<?php
			foreach($birthdays as $birthday):
				$month = month($birthday['month']);
				$use = testmonth($use['0'], $use['1'], $birthday['month'], $birthday['day']);
		?>
        <p>
            <a href="edit.php?id=<?=$birthday['id']?>">
                <?=$birthday['person']?> (<?=$birthday['year']?>)</a>
                
            <a href="delete.php?id=<?=$birthday['id']?>">x</a>
        </p>
        <?php
        	endforeach;
        ?>
        

<p><a href="create.php">+ Toevoegen</a></p>

	</body>
</html>