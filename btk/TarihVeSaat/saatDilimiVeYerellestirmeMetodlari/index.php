<?php
/*
date_default_timezone_get() : Tüm tarih ve saat işlevleri tarafından kullanılan varsayılan
geçerli zaman dilimini bularak, bulduğu değeri geriye döndürür.
timezone_identifiers_list() : Tüm zaman dilimi tanımlayıcıları değerlerinden yeni bir dizi
oluşturarak, oluşturduğu dizi değerini geriye döndürür.
      Değerler:
      1 : Africa
      2 : America
      4 : Antartika
      8 : Kuzey kutbu
      16 : Asya
      32 : Atlantik
      64 : Avustralya
      128 : Avrupa
      256 : Hint
      512 : Pasifik
      2047 : All
date_default_timezone_set() : Tüm tarih ve saat işlevleri tarafından kullanılan varsayılan
geçerli zaman dilimini belirtmek için kullanılır.
      Zaman Dilimleri :
      UTC : Coordinated Universal Tİme (Eş güdümlü evrensel zaman)
      GMT : Greenwich Mean Time (Greenwich ortalama zamanı)
setlocale()                 : Sistemin yerel ayarlarını belirtmek için kullanılır.
(Yerel bilgi, coğrafi konum, para, zaman vb.)
*/

/*        1
  $zaman = date_default_timezone_get();
  echo "Zaman Dilimi : ". $zaman;
  */

  /*      2
  $zamanDilimleri = timezone_identifiers_list();
  echo "<pre>";
  print_r($zamanDilimleri);
  echo "<pre>";
  */

/*         3
  $zaman = date_default_timezone_get();
  echo "Orjinal Zaman Dilimi : " . $zaman . "<br>";

  $zamaniDegistir = date_default_timezone_set("Europe/Monaco");
  $yeniZaman =  date_default_timezone_get();
  echo "Yeni Zaman Dilimi : " . $yeniZaman . "<br>";
*/

  setlocale(LC_ALL,"tr_TR","tr","turkish");
 ?>
