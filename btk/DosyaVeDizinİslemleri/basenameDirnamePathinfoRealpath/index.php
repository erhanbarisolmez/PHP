<?php

/*

basename() : Belirtilecek olan değer doğrultusunda, kaynağın sadece dosya adını bularak,
bulduğu değeri geriye döndürür.
dirname() : Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin
/dizinlerin adını bularak, bulduğu değeri geriye döndürür.
pathinfo() : Belirtilecek olan değer doğrultusunda, kaynağın içerisinde bulunduğu dizin
/dizinlerin adını ve dosya yollarını bularak, bulduğu değerlerden yeni bir dizi oluşturarak,
oluşturduğu dizi değerini geriye döndürür.
realpath() : Belirtilecek olan değer doğrultusunda, kaynağın mutlak adını bularak, bulunduğu
değeri geriye döndürür.

*/
  /*
  $dosya = "belge.txt";
  $bul = basename($dosya);

  echo "basename değeri : " . $bul;
  */
      $dosya = "dosya/belge.txt";
      $bul = realpath($dosya);
      echo "<pre>";
      print_r($bul);
      echo "<pre>";


 ?>
