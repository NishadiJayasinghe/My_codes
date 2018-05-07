<!DOCTYPE html>
<html>
<head>
	<title>Foreach Loop</title>
</head>
<body>
		<?php 
			$JOB_CATOGORIES = array("Finance","accounting","engineering","marketing");

			foreach ($JOB_CATOGORIES as $Jobs) {
				echo $Jobs . "<br>";
			}

		 ?>
		 <br>
		 <?php 

		 	$student = array("first_name" =>"nishadi","second_name" => "erangika", "age"=>12 ,"grade" => "11" );

		 	foreach ($student as $label => $mystudent) {
				echo $label . " : " . $mystudent . "<br>";
			}
		  ?>
</body>
</html>