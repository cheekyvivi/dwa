<!DOCTYPE html>
<html>
	<head>
		<title>Changing Background demo</title>

	<?php

	# I want to change the background based on the time.
	# First, lets find the time.
	$hour= date("G");

	# Second, lets create an if-then statement that changes bg color based on time
	if($hour > 20){
		$bgcolor="black";
	} else{
		$bgcolor="lightblue";
	}

	?>

	</head>

	<body bgcolor="<?=$bgcolor?>">

	<p>The hour is <?=$hour?></p>

	</body>
</html>