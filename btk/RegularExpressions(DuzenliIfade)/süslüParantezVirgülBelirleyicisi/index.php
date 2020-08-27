<?php
/*
 {x,}  : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde
  bulunan değerin x defa ya da daha fazla tekrarlanmış olması gerektiğini belirtnek
  için kullanılır.
*/
$icerik = "111 1111 111111 11 11111 1 111111 11111111 111111 1111111111";
$desen = "/1{2,}/";//*$desen = "/1{2,4}/"; enaz  2 ve  en fazka 4 defa
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal İçerik : <br>";
echo "<pre>";
print_r($sonuc);
echo "<pre>";
 ?>
