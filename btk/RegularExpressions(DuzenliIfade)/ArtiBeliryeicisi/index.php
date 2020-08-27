<?php

/*

+ : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
değerin 1 defa yada daha fazla tekrarlanmış olması gerektiğini belirtmek için kullanılır.

*/

$icerik = "Erhan -- Barış --- Joe ----- Doe -------- ";
$desen = "/-+/";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal İçerik : <br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
 ?>
