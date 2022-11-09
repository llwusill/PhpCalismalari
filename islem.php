<?php
	$ad = "Umut";
	$sayi1 = 10;
	$sayi2 = 21;
	$bolum = $sayi1 / $sayi2;
	echo $bolum;

	$toplam = $sayi1 + $sayi2;
	$cikarma = $sayi1 - $sayi2;
	$carpma = $sayi1 * $sayi2;
	$mod = $sayi1 % $sayi2;
	echo "<br /> $toplam";
	echo "<br /> $cikarma";
	echo "<br /> $carpma";
	echo "<br /> $mod";

	$sayi3 = 16;
	echo "<br />";
	echo sqrt($sayi3);
	echo "<br />";
	echo "Sayiniz : ".sqrt($sayi3); //string ile numerik fonskiyon kullanma
	echo " <br /> Sayinin karekoku : ".pow($sayi3,2); // 1. arg sayi 2. arg uslu ifade
	echo "<br> sayinin mutlak deger : ".abs($sayi3);
	echo "<br> degisken tipi : ".gettype($sayi3);
	echo "<br> degisken tipi : ".gettype($ad);
?>