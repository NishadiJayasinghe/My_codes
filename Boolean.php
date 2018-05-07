<!DOCTYPE html>
<html>
<head>
	<title>Booleans</title>
</head>
<body>
	<?php

	$var1 = true;
	$var2 = false;
	$var3 = "bank";

	?>

	 <?php echo "variable 1: {$var1}" ;?><br>
	 <?php echo "variable 2: {$var2}" ;?><br>
	 <?php echo "Is variable 1 boolean?:" . is_bool($var2) ;?><br>
	 <?php echo "Is variable 3 boolean?:" . is_bool($var3) ;?><br>

	 <?php if($var2 == false){

	 		echo "variable 2 is False";
	 	}
	  ?>	
</body>
</body>
</html>