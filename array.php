<?php

$deneme[] = "Umut"; //  "[]" içi boş bırakılırsa otomatik olarak sıradaki yere atama yapar.
$deneme[] = "Eren";
$deneme[] = "dizi";

print_r($deneme);

echo "<br>";

$paper[0] = "Umut";
$paper[1] = "Eren";
$paper[2] = "dizi";

print_r($paper); // arrayin nesnelerini sırayla yazdırır. kod yazan sırayı görmesi için kullanılır.

echo "<br>";

for ($i=0; $i < 3 ; $i++) {
  echo "$i : $paper[$i]<br>";
}

$dizi['sue']="Serdıl Umut EREN"; //dizideki sue kısaltması ile açıklama yapılabilir.

echo $dizi['sue'];
echo "<br>";

$farkli = array("Coopier","Deneme","Umut","EREN","5.Eleman");
$j=0;
echo "farkli dizisinin 5. elemanı : ".$farkli[4]."<br>";
echo "farkli dizisinin 3. elemanı : $farkli[2] <br>";

foreach ($farkli as $item) {
echo "$j : $item <br>";  //$j kaçıncı eleman olduğunu belli etmek için.
$j++;                    //foreach dizideki her eleman için döngü yapar.
}


$alfabe = array('sue' => "Serdıl Umut EREN",
                'dnm' => "Deneme",
                'photo' => "Photoshop & Desing");

foreach ($alfabe as $item => $description) {
  echo "$item : $description <br>";
}

echo "<br>"."<br>";

while (list($item,$description) = each($alfabe)) //foreach kullanımı daha basit ve önerililir.
  echo "$item : $description <br>";

  echo "<br>";

list ($a,$b) = array("Alice","Bob");
  echo "a=$a , b=$b <br>";

?>
