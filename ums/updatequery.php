<?php require_once('inc/connection.php'); ?> 

<?php 

	/*
		UPDATE table_name
		SET column_1 = value_1, column_2 = value_2 WHERE column_name = value
		LIMIT 1
	*/
		$query = "UPDATE user SET first_name='Charu' WHERE id=5";
		$result_set = mysqli_query($connection, $query);
		//mysqli_affected_ro ws() = returns number of rows affected
		if($result_set){
				echo mysqli_affected_rows($connection) . " Records updated.";
		}else{
			echo "Database query failed";
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>