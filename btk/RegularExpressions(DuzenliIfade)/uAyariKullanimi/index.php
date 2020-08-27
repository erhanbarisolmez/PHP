<?php

/*
u ayarı : Düzenli ifade dahilinde kontrol edilecek olan içeriğin, unicode(evrensel kod)
tanımlaması ile kontrol eder.
*/
/* ORNEK 1
$metin = "Merhaba, ben Erhan Barış ÖLMEZ. Test dosyasıdır.";
$desen = "//";
$sonuc = preg_split($desen, $metin);

echo "Orjinal metin : " . $metin . "<br>";
echo "<pre>";
print_r($sonuc);
echo "<pre/>";
*/
$metin = "Здравствуй";
$desen = "//u";
$sonuc = preg_split($desen, $metin);

echo "Orjinal metin : " . $metin . "<br>";
echo "<pre>";
print_r($sonuc);
echo "<pre/>";
 ?>
