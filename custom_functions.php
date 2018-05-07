<!DOCTYPE html>
<html>
<head>
	<title>User Defined Functions</title>
</head>
<body>
	<?php  
		Function get_month_value($monthval=0 , $yearval=2016){

			switch ($monthval) {
				case 1: $month_name = "Duruthu"; break;
				case 2: $month_name = "Nawam"; break;
				case 3: $month_name = "Medin"; break;
				case 4: $month_name = "Bak"; break;
				case 5: $month_name = "Vesak"; break;
				case 6: $month_name = "Poson"; break;
				case 7: $month_name = "Esala"; break;
				case 8: $month_name = "Nikini"; break;
				case 9: $month_name = "Binara"; break;
				case 10: $month_name = "Vap"; break;
				case 11: $month_name = "Il"; break;
				case 12: $month_name = "Uduwap"; break;
				default:break;
			}

			return $yearval. " ". $month_name;
		}

		echo get_month_value(6, 2018); 

		echo "<br>";

		$domain_name = "bestjobslk.com";
		echo "outside function {$domain_name} <br>";
		myfunc();

		echo "$domain_name";

		function myfunc(){
			global $domain_name;
			echo "Inside function {$domain_name} <br>";
			$domain_name = "www.bestjobslk";
		}
	?>
</body>
</html>