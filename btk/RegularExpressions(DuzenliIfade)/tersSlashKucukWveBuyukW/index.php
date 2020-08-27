<?php
/*
 \w : Dünzeli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
 değerin, harf, rakam, veya _ (alt_çizgi) karakterlerinden herhangi birisi ile eşleşmesi
 gerektiğini belirtmek için kullanılır.
 \W : Dünzeli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
 değerin, harf, rakam, veya _ (alt_çizgi) karakterlerin dışındaki karakterlerinden herhangi
 birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
*/

  $metin = "Merhaba benim adım, Erhan Barış ÖLMEZ'dir. Arkadaşımın adı Ümit'dir.";
  $desen = "/\w/";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
