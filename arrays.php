<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<?php  

		$birds=array("minah","peacock","parrot","duck");
		echo $birds[2];

	?>
	<br>
	<h2>Before</h2>
	<pre>
		<?php print_r($birds); ?>
	</pre>

	<?php $birds[4]="koah"; ?>
	<?php $birds[]="hawl"; ?>
	<?php $birds[2]="naw"; ?>
	<h2>After</h2>
	<pre>
		<?php print_r($birds); ?>
	</pre>
</body>
</html>