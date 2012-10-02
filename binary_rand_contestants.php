<!DOCTYPE html>
<html>
	<head>
		<title>Contestants demo</title>


		<?php

		# ORIGINAL: Here is an array called $contestants, where I have hard-coded the results

		# RANDOM: Now, I want to randomly pick losers and winners. First thing to do is get rid of the hardcode.
		$contestants["Sam"]  = "";
		$contestants["Eliot"]= "";
		$contestants["Liz"]  = "";
		$contestants["Max"]  = "";
	
		# RANDOM: Next, I need a variable that holds a random number, then assign winner/loser to the number
		foreach($contestants as $name => $winning_number){
			$winning_number = rand(1,2);

			if($winning_number==1) {
			$contestants[$name] = "Winner";
		} else {
			$contestants[$name] = "Loser";
		}
		
		}

		
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