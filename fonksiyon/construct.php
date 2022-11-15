<?php
/*
  __Construct() fonksiyonları sınıftan bir nesne yarattığınız zaman
otomatik çalışan fonksiyonlardır.

  __Destruct() fonksiyonları bütün işlemler bittikten sonra otomatik çalışır.
*/

  class meyve
    {
        public $ad;
        public $renk;

        function __Construct()
        {
          echo "(construct)Bir meyve tanımladınız.<br>";
        }
        function __Destruct()
        {
          echo "(destruct)Bütün işlemler tamamlandı.<br>";
        }
    }

  $apple = new meyve();
  echo "<pre>";
  echo "bu mesajdan önce construct sonra destruct çalışacaktır.<br>";

  $apple->ad = "Elma";
  $apple->renk = "Kırmızı";

  print_r($apple);

?>
