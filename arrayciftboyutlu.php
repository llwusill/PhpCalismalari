<?php
$products = array(

    'paper' => array( //'paper','pens','misc' = section
        'copier' => "Copier & Multipurpose",
        'inkjet' => "Inkjet Printer",
        'laser' => "Laser Printer",
        'photo' => "Photoshop & Design"),

    'pens' => array(//section'ların içeriği item
        'ball' => "Ball Point",
        'hilite' => "High Lighters",
        'marker' => "Markers"),

    'misc' => array(// itemların açıklaması value
        'tape' => "Sticky Tape",
        'glue' => "Adhesives",
        'clips' => "Paperclips")
);

echo "<pre>"; // \t gibi değerleri tanımlamak için <pre> kullanılır.
foreach ($products as $section => $item)
  foreach ($item as $key => $value)
    echo "$section :\t$key\t$value<br>";

echo "<br>".$products['pens']['ball']; // istenilen elemanı yazdırma

echo "<br>";

echo (is_array($products)) ? "dizidir." : "dizi değildir.";

/*
sort($diziname) küçükten büyüğe sıralama
sort($diziname,sort_numeric)
sort($diziname,sort_)
*/


// explode bir metindeki herhangi bir karaktere göre metni parçalayıp
// onu dizi haline getirir.

$temp = explode (' ',"Bu cümle örnektir .");
echo "<br>"."<br>";
print_r($temp);
 ?>
