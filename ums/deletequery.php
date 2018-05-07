<?php require_once('inc/connection.php'); ?> 

<?php 

	/*
		DELETE table_name
		 WHERE column_name = value
		LIMIT 1
	*/
		$query = "DELETE from user WHERE id=4 LIMIT 1";
		$result_set = mysqli_query($connection, $query);
		//mysqli_affected_ro ws() = returns number of rows affected
		if($result_set){
				echo mysqli_affected_rows($connection) . " Records deleted.";
		}else{
			echo "Database query failed";
		}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Query</title>
</head>
<body>

</body>
</html>
<?php mysqli_close($connection); ?>