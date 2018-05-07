<?php require_once('inc/connection.php'); ?> 

<?php 

	/*INSERT INTO table_name (
			column1, column2, etc
		)VALUES(
			value1, value2, etc
		)
	*/

		$first_name = 'Charun';
		$last_name = 'Umesh';
		$email = 'charunumesh@gmail.com';
		$password = 'charupassword';
		$is_deleted = 0;

		$hashed_password = sha1($password);

		//echo "hashed_password = {$hashed_password}";

		$query = "INSERT INTO user (first_name, last_name, email, password, is_deleted) VALUES ('{$first_name}', '{$last_name}', '{$email}', '{$hashed_password}' ,{$is_deleted})";
		$result = mysqli_query($connection, $query);

		if ($result ) {
			echo "1 record added";
		}else{
			echo"database query failed";
		}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>