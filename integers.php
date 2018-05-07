<!DOCTYPE html>
<html>
<head>
	<title>Integers</title>
</head>
<body>
	<?php  

		$var1=3;
		$var2=4;

	?>

	basic calculation (((1+2+$var1)*$var2)/2+50):<?php echo (((1+2+$var1)*$var2)/2+50); ?>

	<h2> Some useful integer functions</h2>

	Square root of 100:<?php echo sqrt(100);?><br>
	exponential:<?php echo pow(5, 7); ?><br>
	Absolute value:<?php echo abs(30-75); ?><br>
	Modulo:<?php echo fmod(7, 4); ?><br>
	Random number:<?php echo rand(100,500);?><br>

	<h2>Increment/Decrement</h2>

	Adddition:<?php $var1+=3; echo $var1;  ?><br>
	Substraction:<?php $var2-=1; echo $var2; ?><br>
	Multiplication:<?php $var1*=3; echo $var1; ?><br>
	Division:<?php $var2/=2; echo $var2; ?>
</body>
</html>