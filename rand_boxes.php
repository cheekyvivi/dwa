<!DOCTYPE html>
<html>
	<head>
		<title>Random box demo</title>
	
	<?php
	# I want to create as many or as little boxes as possible
	# First, lets create a box variable
	$boxes="";

	# LOFI: Now, lets create a loop that will let me repeat this box variable 
	# for ten loops. I can change the loop later. I'm going to give the $boxes
	# variable a dummy value of "box"

	# HIFI: Now I want to replace those "box" values with actual red boxes. 
	# I'm going to replace "box" with a short HTML div.

	# RANDOM: Lastly, I want to use the rand() function to create randomly sized boxes.
	# So, I'm going to create a size variable that will carry a random number. I'm going to display it to make 
	# sure its working as well. I can delete this later.

	$size=rand(50,100)."px";

	# Finally, I need to somehow inject this random variable into the HTML

	for($i = 1; $i <= 10; $i++){
		$boxes=$boxes."<div style='width:".$size."; height:".$size."; float:left; margin:4px; background-color:red'></div>";	
	}

	?>

	</head>

	<body>

		<!--Since I want my text to display in the body and not the head, I'm going to 
		plug in some html -->
		<?=$size?>	
		<?=$boxes?>

	</body
</html>