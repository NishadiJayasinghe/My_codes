<!DOCTYPE html>
<html>
<head>
	<title>If statements</title>
</head>
<body>
	<?php  

		$avg_score = 90;
		echo "Score:".$avg_score;

		echo "<br>";
		if($avg_score >= 70) {
			echo "You are qualified. grade:A";
		}
		else if($avg_score>=40){
			echo "You are qualified. Grade:B";
		}
		else{
			echo "please try again.";
		}
	?>
</body>
</html>