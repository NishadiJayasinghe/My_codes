<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays</title>
</head>
<body>
	<?php

		$student = array("first_name" => "Nishadi", "last_name" => "Erangika" , "Age" => 24);	 

	?>
	<h2>Before</h2>
	<pre><?php  print_r($student); ?></pre>
	<br>

	<?php echo $student["first_name"]." ".$student["last_name"] ;?><br>
	<?php $student["Age"] = 23; echo $student["Age"];?>
	
	<h2>After</h2>
	<pre><?php  print_r($student); ?></pre>
</body>
</html>