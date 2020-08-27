<?php
/*
 \d : Dünzeli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
 değerin, sadece rakam karakterlerinin herhangi birisi ile eşleşmesi
 gerektiğini belirtmek için kullanılır.
 \D: Dünzeli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde bulunan
 değerin, rakam karakterlerinin dışındaki herhangi birisi ile eşleşmesi
 gerektiğini belirtmek için kullanılır.
*/

  $metin = "Volkan Alakent 1980 doğumludur.";
  $desen = "/\D/iu";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
