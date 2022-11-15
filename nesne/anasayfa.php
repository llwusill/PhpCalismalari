<?php
// dosya içinde dosya için localhost:xxxx/nesne/anasayfa.php
// örneğin benimki -> http://localhost:8888/nesne/anasayfa.php
  include ("futbolcu.php");
  include ("takim.php");

  echo "<pre>";

  $messi = new futbolcu();
  $messi->AdSoyad = "Lionel Messi";
  $messi->takim = "Barcelona";
  $messi->gol = 13;
  $messi->assist = 7;

  print_r($messi); //objeyi yazdırır.

  echo "<br>";
  echo $messi->AdSoyad;

  $messi->golAt();
  echo "<br>";
  echo "Messi'nin Gol sayisi :".$messi->gol;
  echo "<br>";
  echo "<br>";

  $messi->assistYap(10);
  echo "Messi'nin assists sayisi :".$messi->assist;
  echo "<br>";

  $Barcelona = new takim();
  $Barcelona->ad = "Barcelona";
  $Barcelona->yil = 1884;
  echo "<br>";
  $Barcelona->takimbilgi();

printf("\n\n <span style='color:#%X%X%X'>Deneysel renk çalışması</span>", 40, 217,143);
 ?>
