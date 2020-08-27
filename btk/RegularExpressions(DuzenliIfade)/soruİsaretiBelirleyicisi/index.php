<?php
/*

? : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
değerin 0 defa yada 1 defa tekrarlanmış olması gerektiğini belirtmek için kullanılır.

*/

$icerik = "Erhan - Barış -- Doe --- Joe";
$desen = "/-?/";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal İçerik : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";

 ?>
