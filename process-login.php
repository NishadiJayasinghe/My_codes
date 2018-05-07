<?php 

	$username = $_POST['Username'];
	$password = $_POST['password'];

	if ($username == 'nishadi' && $password == 'neat') {
		echo "Login Successsful";
	}else{
		echo "invalid Password or Username";
	}
 ?>
 