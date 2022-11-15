<?php
/*
Sınıf adlarında büyük küçük harf duyarlıdır.
*/

$object = new user;
print_r($object);

class user {
  public $name, $password;

  function save_user()
  {
    echo "Saved user code goes here";
  }
}
/*
nesne oluştumanın 2 yolu vardır.
*/
$object = new user;
$temp = new user('umut','123sifre');

echo "<br>";
print_r($temp);
echo "<br>";
echo "<br>";



$object = new User;
print_r($object);
echo "<br>";

$object->name = "Joe";
$object->password = "mypass";
  print_r($object);
echo "<br>";

$object->save_user();
  class User {
    public $name, $password;
      function save_user() {
        echo "Save User code goes"; }
}

 ?>
