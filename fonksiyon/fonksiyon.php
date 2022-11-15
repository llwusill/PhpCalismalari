<?php

	$a1= "Umut";
	$a2= "EnES";
	$a3= "BATIN";

	echo $a1." ".$a2." ".$a3."<br>";
	fixnames($a1,$a2,$a3);
	echo $a1." ".$a2." ".$a3."<br>";

	function fixnames(&$n1,&$n2,&$n3)
	{
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));
	}

?>