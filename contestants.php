<!DOCTYPE html>
<html>
	<head>
		<title>Contestants demo</title>


		<?php

		# Here is an array called $contestants, where I have hard-coded the results

		$contestants["Sam"]  = "loser";
		$contestants["Eliot"]= "loser";
		$contestants["Liz"]  = "winner";
		$contestants["Max"]  = "loser";

		# The array version of the for function is called foreach. I'm going to try and code this in 
		# the head PHP section

		// foreach($contestants as $name => $winner_or_loser){
		//	echo $name." is a ".$winner_or_loser."!<br>";
		// }

		?>

	</head>

	<body>

		<h1>Contestants</h1>

		<!-- Read this line as "From the contestants array, assign the variable $name to the indexes and $winner_or_loser
		 	 to the value". Also, remember we can avoid the use of brackets with the following format. -->

		<? foreach($contestants as $name => $winner_or_loser): ?>

		<?=$name?> is a <?=$winner_or_loser?>! <br>

		<? endforeach; ?>


	</body>

</html>