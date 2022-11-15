<?php
/*
Access Modifiers(Erişim Düzenleyiciler)
http://localhost:yourPORTisHERE/nesne/accessM/default.php
default olanlar otomatik public atanır.
*/

  class Calisan
  {
      public $adSoyad;
      public $yas;

      function mesaj()
      {
        echo "<pre>";
        printf("<span style='color:#%x%x%x'>Selam dostum dostum bu bir deneme mesajıdır.</span>",52,124,72);
      }
  }



?>
