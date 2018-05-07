<!DOCTYPE html>
<html>
<head>
	<title>Home </title>
</head>
<body>
	<h1>Home page</h1>
	<?php 

		$news_item=32;
		$category=urlencode("sports & hobbies");
		$url="news.php?news_item={$news_item}&category={$category}";
	 ?>
	<a href="<?php echo $url ?>">Read News Item 1</a>
</body>
</html>