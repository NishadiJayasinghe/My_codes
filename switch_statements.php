<!DOCTYPE html>
<html>
<head>
	<title>Switch</title>
</head>
<body>
	<?php  

		//A:administrator, P: power  user, U: user, G:guest

		$user_group_code = 'U';

		switch ($user_group_code) {
			case 'A':
				 echo "User group: Administrator <br>";
				break;

			case 'P':
				 echo "User group: Power user <br>";
				break;
			
			case 'U':
				 echo "User group: User <br>";
				break;

			case 'G':
				 echo "User group: Guest <br>";
				break;

			default:
				echo "Invalid user group";
				break;
		}

	?>
</body>
</html>