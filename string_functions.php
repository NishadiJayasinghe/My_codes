 <?php

 	$first="The five boxing wizard ";
 	$second="jumps quickly."; 	

 	$sentence=$first;
 	$sentence.=$second;
 	echo $sentence;

 ?>
 <br>
 All simple:<?php echo strtolower($sentence);?><br>
 All capital:<?php echo strtoupper($sentence);?><br>
 First letter capital:<?php echo ucfirst($sentence);?><br>
 First letter capital of each word:<?php echo ucwords($sentence);?><br>
 Number of characters:<?php echo strlen($sentence);?><br> 
 Search box:<?php echo strstr($sentence,"box");?><br>
 Replace a word:<?php echo str_replace("five","seven",$sentence);?>