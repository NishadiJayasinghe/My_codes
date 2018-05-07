<?php 

	session_start();
	$_SESSION['user_id'] = 32;
	$_SESSION['first_name'] = 'nishadi';

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
	<?php 
 	
		echo "user ID: {$_SESSION['user_id']}<br>";
		echo "First Name: {$_SESSION['first_name']}<br>";
 	?>
</body>
</html>