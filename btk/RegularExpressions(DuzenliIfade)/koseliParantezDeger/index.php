<?php
/*
  [abc] : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde
  bulunan değerin, belirtilen karakterlerden herhangi birisi ile eşleşmesi gerektiğini
   belirtmek  için kullanılır.
*/

  $metin = "Merhaba benim adım Erhan Barış ÖLMEZ";
  $desen = "/[ahe]/i";// /a/ /h/ /e/ leri arıyor.
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
