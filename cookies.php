<?php 

	//setcookie(name ,value,expiration);
	

	//print_r($_COOKIE);
//if (isset($_COOKIE['language'])){
//	$language = $_COOKIE['language'];
//	echo "selected language:  {$language}";
//}else{
//	setcookie('language', 'sinhala', time()+60*60*24*7);

//how to remove a cookie
setcookie('language',NULL, -time()+60*60*24);

	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies</title>
</head>
<body>

</body>
</html>