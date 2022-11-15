<?php

  class futbolcu{

    public $AdSoyad;
    public $takim;
    public $gol;
    public $assist;

    public function golAt(){
          $this->gol++;
      }
      public function assistYap($sayi){
          $this->assist+=$sayi;
        }

    }


?>
