<!DOCTYPE html>
<html>
<head>
	<title>Floating Points</title>
</head>
<body>
	<?php

		$float=1.544;
		$myfloat = 4.253;
		$myinteger = 5;

	  ?>

	  <?php echo $float; ?><br>
	  <?php $float += 5; echo $float;  ?><br>

	  <h2>Fuctions</h2>
	  Round: <?php echo round($float,1); ?><br>
	  Round up:<?php echo ceil($float); ?><br>
	  Round Down:<?php echo floor($float); ?><br>

	  <h2>How to check if a number is an Integer or a Float</h2>

	  <?php echo "Is {$myfloat} an Integer?" . is_int($myfloat);?><br>
	  <?php echo "Is {$myinteger} an Integer?" . is_int($myinteger);?><br>

	  <?php echo"<br>"; ?>

	  <?php echo "Is {$myfloat} a Float?" . is_float($myfloat);?><br>
	  <?php echo "Is {$myinteger} a Float?" . is_float($myinteger);?><br>

	  <?php echo "<br>"; ?>
	  <?php echo "Is {$myfloat} a number?" . is_numeric($myfloat);?><br>
	  <?php echo "Is {$myinteger} a number?" . is_numeric($myinteger);?><br>



</body>
</html>