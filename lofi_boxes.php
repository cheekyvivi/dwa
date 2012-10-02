<!DOCTYPE html>
<html>
	<head>
		<title>Random box demo</title>
	
	<?php
	# I want to create as many or as little boxes as possible
	# First, lets create a box variable
	$boxes="";

	# Now, lets create a loop that will let me repeat this box variable 
	# for ten loops. I can change the loop later. I'm going to give the $boxes
	# variable a dummy value of "box"

	for($i = 1; $i <= 10; $i++){
		$boxes=$boxes."box ";	
	}

	?>

	</head>

	<body>

		<!--Since I want my text to display in the body and not the head, I'm going to 
		plug in some html -->

		<?=$boxes?>

	</body
</html>