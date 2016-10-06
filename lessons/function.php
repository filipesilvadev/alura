<?php 
	$myArray = array(2,5,3,6,8,4,2,8,4,1);
	function somaArray($array) {
		for ($i=0; $i < sizeof($array) ; $i++) { 
			$r += $array[$i];
		}
		return  $r;
	}
	$p = somaArray($myArray);
	echo $p;
 ?>