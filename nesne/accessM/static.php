<?php
/*
  rand($param1,$param2) verilen 2 değer arası rastgele sayı üretir.

    Static yapısındaki veriler için nesne üretmeye gerek yoktur.
      $a = new Ayarlar ... gibi ifadelere ihtiyaç duymaz.
*/
  class Ayarlar
  {
    static $pi = 3.14;

    static function sayiUret()
    {
      echo rand(1000,9999);
    }
  }

  echo Ayarlar::$pi; //static yapıdaki üyeleri class içinden böyle çekeriz.
  // ClassName_::_$degiskenAdi   (:: erişim aracı)
  // ClassName_::_FonkAdi
  echo "<br>";
  echo Ayarlar::sayiUret();

?>
