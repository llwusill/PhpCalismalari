<?php

	$a1= "Umut";
	$a2= "EnES";
	$a3= "BATIN";

	echo $a1." ".$a2." ".$a3."<br>";
	fixnames($a1,$a2,$a3);
	echo $a1." ".$a2." ".$a3."<br>";

	function fixnames()
	{
		global $a1 ;$a1 = ucfirst(strtolower($a1));
		global $a2 ;$a2 = ucfirst(strtolower($a2));
		global $a3 ;$a3 = ucfirst(strtolower($a3));
	}
//----------------------------------
	$knr1=5;
	$knr2=12;
	
	echo "Kenar 1: ".$knr1."<br>"."Kenar 2: ".$knr2."<br>";
	echo hipocevre($knr1,$knr2);
	
	function hipocevre($n1,$n2)
{
	$n1 = pow($n1,2);
	$n2 = pow($n2,2);
	$hipo = $n1+$n2;
	$cevre = sqrt($n1)+sqrt($n2)+sqrt($hipo);

	return "Hipotenüs: ".sqrt($hipo)."<br>"."Çevre : ".$cevre."<br>";

}

$s=geo(3,4);
echo "hipo : $s[0] ve cevre : $s[1]";
function geo($n1,$n2)
{
$h=sqrt($n1**2+$n2**2);
$c=$n1+$n2+$h;
return array($h,$c);
}

$d1=7;
$d2=13;
echo "<br>İlk sayı : $d1 <br> İkinci sayı : $d2";
swap($d1,$d2);
echo "<br> Değişimden sonra ilk sayı : $d1 <br>Değişimden sonra ikinci sayı : $d2";

function swap(&$v1,&$v2)
{
$swap=$v1;
$v1 = $v2;
$v2 = $swap;
}

include("fonksiyon.php");
require("fonksiyon.php");


?>