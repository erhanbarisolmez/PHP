<?php
/*
s : Düzenli ifade dahilinde kontrol edilecek olan içerğin birden fazla satırı varsa tüm satırların
kontrol edilmesini sağlar.
*/
$metin = "Merhaba bu bir test uygulamasıdır.
PHP eğitimi için yazılmıştır.";
$desen = "/.*/s";
preg_match_all($desen, $metin, $sonuc);

echo "Orjinal İçerik : " . $metin . "<br><br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
 ?>
