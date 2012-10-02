<!DOCTYPE html>
<html>
	<head>
		<title>Contestants demo</title>


		<?php

		# ORIGINAL: Here is an array called $contestants, where I have hard-coded the results

		# COUNTER: I'm going to create a variable that counts the number of winners, starting at 0
		$counter="0";


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
		# If a 1 is drawn, and subsequently a winner is selected, the $counter variable will increment by 1
			$counter++;
			$winner_name=$name;
				} else {
				$contestants[$name] = "Loser";
				}
		
		}

		# I can vary the message that gets shown based on the counter here. 
		if($counter==0){ # i.e. A 1 was never drawn, all the contestants drew 0s
			$message="No winners this round!";
		} elseif ($counter>1){ # i.e. More than one 1 was drawn, so at least two contestants have to be 0s
			$message="It's a tie!";
		} else {
			$message = "Congratulations ".$winner_name."!";
			}

		
		?>

	</head>

	<body>

		<h1>Contestants</h1>

		<!-- Read this line as "From the contestants array, assign the variable $name to the indexes and $winner_or_loser
		 	 to the value". Also, remember we can avoid the use of brackets with the following format. -->

		<? foreach($contestants as $name => $winner_or_loser): ?>

		<?=$name?> is a <?=$winner_or_loser?>! <br>

		<? endforeach; ?> <br>

		<!-- I can insert the message down here, which will vary based on the the result of the counter -->
		<?=$message?>

	</body>

</html>