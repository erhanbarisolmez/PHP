<?php

/*
 {x}  : Düzenli ifade dahilinde kontrol edilecek olan karakter diziliminde bulunan
 değerin x defa tekrarlanmış olması gerektiğini belirtnek için kullanılır.
*/
  $icerik = "Alfabenin ilk harfi a ile başlar.
  Alfabenin ilk harfi a ile başlar.
  Alfabenin ilk harfi a ile başlar.
  Alfabenin ilk harfi aaaa ile başlar.
  Alfabenin ilk harfi a ile başlar.";
  $desen = "/a{4}/";
  preg_match_all($desen, $icerik, $sonuc);

  echo "Orjinal İçerik : <br>";
  echo "<pre>";
  print_r($sonuc);
  echo "<pre>";
 ?>
