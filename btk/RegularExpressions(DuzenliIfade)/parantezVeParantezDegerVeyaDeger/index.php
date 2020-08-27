<?php
/*

() : Düzenli ifadelerde grup tanımlamak için kullanılır.
(x|y): Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
değerin x ya da y karakterlerinden herhangi birisi ile eşleşmesi gerektiğini belirtmek için
kullanılır.
*/

$icerik = "Bu bir test yazısıdır, lütfen dikkate almayın.";
$desen = "/te|mam|(st)/";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal İçerik : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";

 ?>
