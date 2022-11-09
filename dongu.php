<?php
	$sayi1 = 10;
	$sayi2 = 15;
	$sayi3 = 13;
	$kontrol = $sayi1 == $sayi2 ? "Sayılar eşittir." : "Sayılar eşit değildir." ;
	echo "<br>".$kontrol ;
	$kontrol2 = $sayi1 == $sayi3 ? "Sayılar Eşit!!!" : "Sayılar Eşit değil :D" ;
	echo "<br>".$kontrol2;

	if ($sayi1==$sayi3) {
		echo "<br> Sayılar birbirine eşittir.";
	} else {
		echo "<br> Sayılar birbirine eşit değil. Sayı 1 : ".$sayi1." Sayı 2 : ".$sayi3;
	}
	
	while ($sayi1 != 15) {
		echo "<br> Bu sayı 15'ten küçüktür. <br>";
		break ;
	}

		$x= 1;

	switch ($x) {
		case '1':
			echo "x = 1<br><br>";
			break;
		
		default:
			echo "x'in değeri yok<br><br>";
			break;
	}

	for ($i=1; $i<6; $i++) { 
		for($j=0; $j<$i; $j++)
		{
			echo " * ";
		}
		echo "<br>";

	}

	echo"<br>";

	for ($i=5; $i >0 ; $i--) { 
		for ($j=0; $j<$i ; $j++) { 
					echo " * ";
				}		
				echo "<br>";
	}

	echo "<br>";
		echo strrev("Hello World.");
		echo str_repeat(" <br> Tekrar eden cümle", 3);
		echo strtoupper("<br> bu harfler aslıdna küçük");
		echo strtolower("<br> BU HARFLER ASLINDA BÜYÜK<br>");


		function fixnames ($n1,$n2,$n3)  // ucfirst() girilen ifadenin ilk harfini büyütür.
		{
			$n1 = ucfirst(strtolower($n1));
			$n2 = ucfirst(strtolower($n2));
			$n3 = ucfirst(strtolower($n3));

			return array($n1,$n2,$n3);
		}

		$names = fixnames("Enes","uMUT","BATIN");

		echo $names[0]." ".$names[1]." ".$names[2];

?>