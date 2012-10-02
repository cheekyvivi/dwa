<!DOCTYPE html>
<html>
	<head>
		<title>Contestants demo</title>


		<?php

		# Here is an array called $contestants, where I have hard-coded the results

		$contestants["Sam"]  = "";
		$contestants["Eliot"]= "";
		$contestants["Liz"]  = "";
		$contestants["Max"]  = "";

		# The binary scenario allows for multiple winners. How can I restrict it to one winner?

		# First, lets pick a random number out of the number of contestants
		$contestant_numbers = count($contestants);
		$winning_number = rand(1,$contestant_numbers);
		echo $winning_number;


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