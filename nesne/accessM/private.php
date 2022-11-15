<?php

  class Araba
  {
    public $Marka;
    private $model;

    public function set_model($yeni)
    {
      $this->model=$yeni;
    }
    public function get_model()
    {
      echo "Aracın Modeli : ".$this->model;
    }
  }

  $bmw = new Araba;
  $bmw->Marka = "BMW";
  $bmw->set_model(635);
  $bmw->get_model();
  /*
           $bmw->model = 635;
    gizli değere erişim olmayacağı için error verecektir.
    ya da boş sayfa gelecektir.

    Private ögelere class dışından ulaşılamaz!

    bu ögelere erişim için set,get gibi fonksiyonlar
    kullanılır.
  */

  class Calisan
  {
    public $adSoyad;
    public $maas;

    private function zamYap($miktar)
    {
      $this->maas+=$miktar;
    }
  }

  /*
  private yapılar sadece tanımlandığı sınıf içerisinde kullanılır.
  mirasçılar alt sınıftır.
  */

  class muhendis extends Calisan
  {
    public $alan;

    public function veriAyarla()
    {
      $this->adSoyad="Umut EREN";
      $this->maas = 40215;
      echo "<br>"."isçinin yeni maaşı :".$this->maas."<br>";
      // $this->zamYap(921);
      // bu fonk çalışmayacaktır.
    }
  }

  $isci = new muhendis();
  $isci->adSoyad = "Hushi Wusi";
  $isci->maas = 21000;
  //$isci->zamYap(500);

  echo "<br>";
  $isci->veriAyarla();
  
  //mühendis adındaki sınıfı oluştur ve Calisan sınıfından miras al

?>
