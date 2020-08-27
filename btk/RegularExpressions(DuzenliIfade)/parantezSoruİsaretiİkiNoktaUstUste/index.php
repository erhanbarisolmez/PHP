<?php
/*

(?:) : DÜzenli ifadelerde alt grup oluşturmak için kullanılır.

*/

$icerik = " Merhaba Erhan Barış ÖLMEZ, Merhaba Erhan Barış ÖLMEZ, Merhaba Erhan Barış ÖLMEZ";
$desen = "/Er(han)?/";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal İçerik : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";

 ?>
