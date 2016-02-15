<?php 
	require_once "index.logic.php";
?>
<!doctype html>

<html>
	<head>
        <link rel="stylesheet" type="text/css" href="common/main.css">
		<title>Verjaardagskalender</title>
        <link href="../common/main.css" rel="stylesheet" type="text/css">
	</head>
	
	<body>
		<?php
			foreach($birthdays as $birthday):
				$month = month($birthday['month']);
				if($use != $birthday['month']):
					$use = $birthday['month'];
					$useday = null;
					echo "<h1> $month </h1>";
				endif; 
				
				if($useday != $birthday['day']):
					$useday = $birthday['day'];
					echo "<h2> $birthday[day] </h2>";
				endif;
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