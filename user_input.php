<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>

		<?php
			
		# I want to use user input of names from $_POST array when there is data available
		if($_POST){

		# Of these users, I want to create a loop over the names from $_POST array
			 foreach($_POST as $input => $name){

			 	#N Here is the winning number!
			 	$winning_number = rand(1,2);

			 	# If $name draws the $winning_number of 1, $name is a winner
			 	if($winning_number == 1){

			 		# This is a new array called $contestants that assigns
			 		# Winner/loser to each $name
			 		$contestants[$name]="Winner";

			 		# I'm also going to tack on the mail function here. I've grayed this out so that I keep spamming myself
			 		# mail($name,'Congratulations!', "You're a winner!");

			 	} else {$contestants[$name]="Loser";
			 }



			 }
			}

		?>

	</head>

	<body>

		<form method='POST' action='user_input.php'> <!--action must post back to this current page-->
			Enter 5 contestants<br>
			<input type='text' name="contestant1" value="<?=$_POST[contestant1]?>"><br>
			<input type='text' name="contestant2" value="<?=$_POST[contestant2]?>"><br>
			<input type='text' name="contestant3" value="<?=$_POST[contestant3]?>"><br>
			<input type='text' name="contestant4" value="<?=$_POST[contestant4]?>"><br>
			<input type='text' name="contestant5" value="<?=$_POST[contestant5]?>"><br>
			<input type='submit' value="Pick a winner!"><br>
		</form>
		<br>

		<!-- Remember how we created a new array in the second part of the PHP? Instead 
		of using the $_POST array, I used the data from the $_POST array to create a new array
		called $contestants -->
		<? foreach($contestants as $name => $winner_or_loser) : ?>

		<?=$name?> is a <?=$winner_or_loser?> <br>

	<? endforeach ?>

	</body>
</html>