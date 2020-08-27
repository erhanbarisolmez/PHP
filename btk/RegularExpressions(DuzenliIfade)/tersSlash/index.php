<?php
/*

\ : Düzenli ifadelerde ardından gelecek olan karakterlerin özel bir karakterolmadığını
belirtmek için kullanılır.

*/

$deger = " 11 + 111 işlemninin sonucu 122'dir.";
$desen = "/\+/";
preg_match_all($desen, $deger, $sonuc);

echo "Orjinal İçerik : " . $deger . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
 ?>
