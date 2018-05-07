<!DOCTYPE html>
<html>
<head>
	<title>While Loops</title>
</head>
<body>
		<?php 
			$i=1;

			while ($i <= 12) {
				echo "12 x {$i} = " . 12*$i."<br>";
				$i++;
			}
			echo "now i=" . $i;
		 ?>
		 <br>
		 <br>	
		 <br>
		 	<h2>Multiplication Table</h2>	
		 <?php

		 	for($j=1 ; $j<=12 ; $j++){
		 		echo "<b>number: {$j}</b><br>"; 
			 	for ($i=1; $i <=12 ; $i++) { 
			 		echo "{$j} x {$i} = " . $j*$i ."<br>";
			 	}

			 }
			 
		 ?>
</body>
</html>