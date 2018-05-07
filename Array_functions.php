<!DOCTYPE html>
<html>
<head>
	<title>Array Functions</title>
</head>
<body>
	<?php 

		$mynumbers = array(1,6,8,3,4,9,2,78,6);

	 ?>

	 Maximum value:<?php echo max($mynumbers);  ?><br>
	 Minimum value:<?php echo min($mynumbers);  ?><br>
	 count:<?php echo count($mynumbers);  ?><br>
	 <pre>Sort:<?php sort($mynumbers); print_r($mynumbers); ?><br></pre>

	 <pre> Riverse Sort:<?php rsort($mynumbers); print_r($mynumbers); ?><br></pre>
	 Implode:<?php $string=implode("|", $mynumbers); echo $string;?><br>
	 Explode:
	 <pre>
	 	<?php $newarray = explode("|",$string); print_r($newarray) ; ?>
	 </pre>
	 search:<?php echo in_array(9,$mynumbers); ?>
</body>
</html>