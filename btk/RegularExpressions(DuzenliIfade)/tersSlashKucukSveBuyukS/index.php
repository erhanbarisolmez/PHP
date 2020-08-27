<?php
/*
 \s : Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin,
 sadece boşluk karakterleri ile eşleşmesi gerektiğini belirtmek için kullanılır.
 \S: Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan değerin,
 boşluk karakteri dışındaki herhangi bir karakterin birisi ile eşleşmesi gerektiğini belirtmek için kullanılır.
*/

  $metin = "Volkan Alakent 1980 doğumludur.";
  $desen = "/\S/iu";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
