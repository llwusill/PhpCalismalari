<?php

  include ("default.php");

  $kullanıcı = new Calisan;
  $kullanıcı->adSoyad = "Umut EREN";
  $kullanıcı->yas= 21;

  print_r($kullanıcı);
  echo "<br>";
  echo $kullanıcı->mesaj();

  
?>
