<?php
/*
 x  : Düzenli ifade dahilinde kontrol edilecek olan içeriğin, desende bulunan boşluğu etkisiz
 hale getirerek kontrol edilmesini sağlar.
*/
$metin = "Erhan Barış ÖLMEZ, PHP eğitim seti";
$desen = "/P H P/x";
preg_match($desen, $metin, $sonuc);

echo "Orjinal içerik : " . $metin . "<br>";
echo "Desen: <br>";
echo "<pre>";
print_r($sonuc);
echo "<pre/>";
 ?>
