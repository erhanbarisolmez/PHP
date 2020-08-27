<?php
/*

fopen()  : Belirtilecek olan dosyayı veya URL'i, belirtilecek olan modda açmak için kullanılır.

  r   : Okuma amaçlı açar.
  r+  : Hem okuma hemde yazma amaçlı açar.
  w   : Yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değlse oluşturulur.
  w+  : Hem okuma hemde yazma amaçlı açar. Dosya verisini boşaltarak yeniden yazar. Dosya mevcut değlse oluşturulur.
  a   : Yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değlse oluşturulur.
  a+  : Hem okuma hemde yazma amaçlı açar. Dosya verisine dokunmadan sonuna ek yaparak yazar. Dosya mevcut değlse oluşturulur.
  x   : Yazma amaçlı açar. Dosya mevcut değilse fopen() metodu false değeri döndürürerek hata üretir.
  x+  : Hem okuma hemde yazma amaçlı açar. Dosya mevcut değilse fopen() metodu false değeri döndürürerek hata üretir.

fclose() : fopen() metodu ile açılmış olan belirtilecek olan dosyayı veya URL'i, kapatmak için kullanılır.
 Ayrıca istenilirse işlem sonucunu boolean(mantıksal) veri türünde döndürmek için kullanılır.

*/

/*
 $dosya = "belge.txt";
 $dosyaAc = fopen($dosya, "r");

 if ($dosyaAc) {
   echo $dosya . " isimli dosya başarıyla açıldı.<br>";
 }else {
   echo $dosya . "isimli dosya açılamadı! <br>";
 }
  $dosyayiKapat = fclose($dosyaAc);
  if ($dosyayiKapat ==1) {
    echo $dosya . " dosya kapandı.<br>";
  }
  */
  $urlAdres = "https://www.google.com";
  $urlAc = fopen($urlAdres, "r");

  if ($urlAc) {
    echo $urlAdres . " isimli URL başarıyla açıldı.<br>";
  }else {
    echo $urlAdres . "isimli URL açılamadı! <br>";
  }
   $urlKapat = fclose($urlAc);
   if ($urlKapat ==1) {
     echo  " URL kapandı.<br>";
   }

 ?>
