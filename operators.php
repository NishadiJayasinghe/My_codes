<!DOCTYPE html>
<html>
<head>
	<title>Operators</title>
</head>
<body>
	<?php 
		$subject1 = 60; 
		$subject2 = 80;

		echo "subject1:".$subject1;
		echo "<br>";
		echo "subject2:".$subject2;
		echo "<br>";

		if (($subject1>50)&&($subject2>50)) {
			echo "you have pass the exam";# code...
		}
		else{
			echo "u need to pass the two subjects";
		}
	 ?>

	 <br>

	 <?php 
		$subject1 = 43; 
		$subject2 = 80;

		echo "subject1:".$subject1;
		echo "<br>";
		echo "subject2:".$subject2;
		echo "<br>";

		if (($subject1>50)||($subject2>50)) {
			echo "you have pass the exam";# code...
		}
		else{
			echo "u need to pass the two subjects";
		}
	 ?>

	 <br>

	 <h2>Not operatar(!)</h2>
	 <?php 
	 	//$username="nishadi";
	 	if(!isset($username)){
	 		//echo "your name is:" . $username;
	 		echo "Please enter the username";
	 	}
	  ?>


</body>
</html>