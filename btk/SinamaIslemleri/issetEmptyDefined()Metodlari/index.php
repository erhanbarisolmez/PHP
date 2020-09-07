<?php
/*

definded() : Belirtilecek olan sabitin varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
isset()    : Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
empty()    : Belirtilecek olan değişkenin veya dizi içerisinde belirtilecek olan anahtarın daha önceden tanımlanmamış olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.

*/

/* ÖRNEK 1
  $kontrol = defined("ISIM");
  if ($kontrol == true) {
    echo "isim adında sabit bulunmaktadır.";
  }else {
    echo "isim adında sabit bulunmamaktadır.";
  }
!-*/

/* ÖRNEK 2
  define("ISIM","Erhan Barış ÖLMEZ");
  $kontrol = defined("ISIM");
  if ($kontrol == true) {
    echo "isim adında sabit bulunmaktadır.";
  }else {
    echo "isim adında sabit bulunmamaktadır.";
  }
!-*/

/* ÖRNEK 3
  const ISIM = "Erhan Barış ÖLMEZ";
  $kontrol = defined("ISIM");
  if ($kontrol == true) {
    echo "isim adında sabit bulunmaktadır.";
  }else {
    echo "isim adında sabit bulunmamaktadır.";
  }
  !-*/

  /* ÖRNEK 4
    $kontrol = isset($isim);
    if ($kontrol == true) {
      echo '$isim adında değişken bulunmaktadır.';
    }else {
      echo '$isim adında değişken bulunmamaktadır.';
    }
  !-*/

  /* ÖRNEK 5
    $isim = "Erhan Barış ÖLMEZ";
    $kontrol = isset($isim);
    if ($kontrol == true) {
      echo '$isim adında değişken bulunmaktadır.';
    }else {
      echo '$isim adında değişken bulunmamaktadır.';
    }
  !-*/

  /* ÖRNEK 6
    $isim = array("Erhan", "Barış", "ÖLMEZ");
    $kontrol = isset($isim[3]);
    if ($kontrol == true) {
      echo 'isim adındaki dizide 2 numaralı anahtar bulunmaktadır.';
    }else {
      echo 'isim adındaki dizide 2 numaralı anahtar bulunmamaktadır.';
    }
  !-*/

  /* ÖRNEK 7
    $degerler = array("Eşya" => "Masa", "Renk" => "Mavi", "Vasita" => "Araba");
    $kontrol = isset($degerler["Renk"]);
    if ($kontrol == true) {
      echo 'degerler adındaki dizide Renk anahtarı bulunmaktadır.';
    }else {
      echo 'degerler adındaki dizide Renk anahtarı  bulunmamaktadır.';
    }
  !-*/

  /* ÖRNEK 8
    $kontrol = empty($isim);

    if ($kontrol == true) {
      echo "isim adında değişken bulunmamaktadır.";
    }else {
      echo "isim adında değişne bulunmaktadır.";
    }
 !-*/

  /* ÖRNEK 8
     $isim = "ERHAN BARIŞ";
     $kontrol = empty($isim);

     if ($kontrol == true) {
       echo "isim adında değişken bulunmamaktadır.";
     }else {
       echo "isim adında değişne bulunmaktadır.";
     }
    !-*/

  /* ÖRNEK 9
    $degerler = array("Eşya" => "Masa", "Renk" => "Mavi", "Vasita" => "Araba");
    $kontrol = empty($degerler["Renk"]);
    if ($kontrol == true) {
      echo 'degerler adındaki dizide Renk anahtarı  bulunmamaktadır.';
    }else {
      echo 'degerler adındaki dizide Renk anahtarı bulunmaktadır.';
    }
  !-*/

  /* ÖRNEK 9   !-*/
    $degerler = array("Masa", "Mavi", "Araba");
    $kontrol = empty($degerler["5"]);
    if ($kontrol == true) {
      echo 'degerler adındaki dizide 5 anahtarı  bulunmamaktadır.';
    }else {
      echo 'degerler adındaki dizide 5 anahtarı bulunmaktadır.';
    }
