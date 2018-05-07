<!DOCTYPE html>
<html>
<head>
	<title>News</title>
</head>
<body>
	<h1>News Page</h1>
	<pre>

	<?php 

		//print_r($_GET);
	$news_item= $_GET['news_item'];
	$category=$_GET['category'];


	 ?> 
	 <h2>news item=<?php echo "$news_item"; ?></h2>
	 <h2>category=<?php echo "$category"; ?></h2>
	 </pre>
</body>
</html>