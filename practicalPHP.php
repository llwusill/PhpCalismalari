<?php
printf("Bu cümle bir örnektir ve sayı %d 'dür.",3);
//%d -> decimal yerine %b yazsaydık 11 yazardı.
//%b -> binary
printf("<br> Bu cümle bir örnektir ve sayı binary düzlemde %b 'e eşittir.",3);
/*
%b binary
%d decimal
%c ascii
%e 1.2300000e+2 gibi
%f float
%o octal
%s string
%u unsigned decimal
%x hexadecimal küçük harf
%X hexadecimal büyük harf
*/
echo "<br>"."<br>";
printf("<span style='color:#%X%X%X'>Hello </span>",20,77,195);
echo "<br>"."<br>";

printf("Ondalık işlemler için $%.2f",123.42/12);
echo "<br>"."<br>";
echo "<pre>";

printf("örnek %15f\n",123.42/12);
printf("örnek %015.4f\n",123.42/12);
printf("örnek %'#15.2f\n",123.42/12);
// % işaretinden sonra '# gibi özel karakter girersek otomatik olarak # ile doldurur.

//string kullanımları

$s = "Rasmus";
printf("[%s]\n",$s);
printf("[%12s]\n",$s);
printf("[%-12s]\n",$s);
printf("[%012s]\n",$s);
printf("[%'#12s]\n",$s);

$sh = "Rasmus Lerdorenesa";
printf("[%12.4s]\n",$sh);
printf("[%-12.12s]\n",$sh);
printf("[%-'@12.10s]\n",$sh);



?>
