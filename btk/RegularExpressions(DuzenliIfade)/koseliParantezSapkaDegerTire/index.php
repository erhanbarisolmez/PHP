<?php
/*
  [^x-y] : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde
  bulunan değerin, belirtilen karakter aralığı dışındaki karakterlerin herhangi birisi
  ile eşleşmesi gerektiğini belirtmek  için kullanılır.
*/

  $metin = "Merhaba benim adım, Erhan Barış ÖLMEZ'dir. Arkadaşımın adı Ümit'dir.";
  $desen = "/[^a-Za-Z]/iu";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
