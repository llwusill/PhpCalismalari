<?php

  class Calisan
  {
    public $adSoyad;
    public $maas;

      function zamYap($miktar)
      {
        $this->maas+=$miktar;
      }
  }

  $isci=new Calisan();
  $isci->adSoyad="Forest Gump";
  $isci->maas = 4000;
  /*
        $isci->zamYap(500);
    bu kodu açarsanız hata verecektir.
    protected haldeki ögeye class dışından doğrudan erişim sağlanamaz.
    Bunu kullanmak için bir alt sınıf oluşturmalıyız.
  */

  class muhendis extends Calisan
  {
      public $alan;

      public function veriAyarla()
      {
        $this->name = "Carls Jr";
        $this->maas = 3500;
        echo "ilk maaş : $this->maas"."<br>";
        $this->zamYap(2500);
        echo "yeni maaşı : $this->maas";
      }
  }
  $isci2 = new muhendis();
  $isci2->veriAyarla();

/*
  protected öğeye mirasçı ile ulaşım yapılırken private olana yapılamaz.
*/

?>
