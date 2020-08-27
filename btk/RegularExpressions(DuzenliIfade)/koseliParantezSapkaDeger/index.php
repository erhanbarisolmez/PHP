<?php
/*
  [^abc] : Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde
  bulunan değerin, belirtilen karakter dışındaki karakterlerden herhangi birisi
  ile eşleşmesi gerektiğini belirtmek  için kullanılır.
*/

  $metin = "Merhaba benim adım, Erhan Barış ÖLMEZ'dir. Arkadaşımın adı Ümit'dir.";
  $desen = "/[^aeiioöüıu]/iu";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
