<?php
/*
  .: Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminde
  bulunan değerin, yeni satır hariç herhangi birisi ile eşleşmesi gerektiğini
  belirtmek  için kullanılır.
*/

  $metin = "Merhaba Benim Adım Erhan Barış ÖLMEZ. Ben bir PHP yazılımcısıyım. 6+2+5 işleminin sonucu 13'dir.";
  $desen = "/./iu";
  preg_match_all($desen, $metin, $sonuc);

  echo "Orjinal Metin İçeriği : " . $metin. "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "</pre>";
 ?>
