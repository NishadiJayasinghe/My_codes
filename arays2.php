<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?php  

		$birds=array(1,2,3,"minah","peacock",array("red","blue","green"),"parrot","duck");
		echo $birds[2];

	?>
	<br>
	<h2>Before</h2>
	<pre>
		<?php print_r($birds); ?>
	</pre>

	<?php $birds[5][1]="orange";?>
	
	<h2>After</h2>
	<pre>
		<?php print_r($birds); ?>
	</pre>
</body>
</html>