<?php

/*
  stat() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya hakkındaki tüm
  bilgilerini bularak, bulduğu değerlerden yeni bir dizi oluşturarak, oluşturduğu değeri
  geriye döndürür.

  fstat() : fopen() metodu kullanılarak açılmış olan ve belirtilecek olan değer doğrultusunda,
  ilgili kaynağın dosya hakkındaki tüm bilgilerini bularak, bulduğu değerlerden yeni bir dizi
  oluşturarak, oluşturduğu değeri geriye döndürür.

  clearstatcache() : stat() veya fstat() metodu kullanılarak elde edilen ve ön belleğe alınan verileri
  temizlemek için kullanılır.

  stat() ve fstat() Değerleri :

   [0]  ve   dev      => Aygıt numarası (Genellikle değeri 2'dir.)
   [1]  ve   ino      => Dosya düğüm numarası (Genellikle değeri 0'dır.)
   [2]  ve   mode     => Dosya erişim izinleri (Genellikle değeri 33206)
   [3]  ve   nlink    => Bağlantı sayısı  (Genellikle değeri 1'dir.)
   [4]  ve   uid      => Dosya sahibi ID'si (Genellikle değeri 0'dir.)
   [5]  ve   gid      => Dosya sahibi grubu ID'si (Genellikle değeri 0'dir.)
   [6]  ve   rdev     => Dosya düğümü aygıtları için aygıt tüürü (Genellikle değeri 2'dir.)
   [7]  ve   size     => Dosta boyutu (Byte cinsinden)
   [8]  ve   atime    => Dosya son erişim zamanı (Unix zaman damgası türünde)
   [9]  ve   mtime    => Dosya değiştirilme zamanı (Unix zaman damgası türünde)
   [10] ve   ctime    => Dosya oluşturma zamanı (Unix zaman damgası türünde)
   [11] ve   blksize  => Dosya sistemi için I/O blok boyutu (Genellikle Windows değeri -1'dir.)
   [12] ve   blocks   => Dosya için ayrılmış 512 byte'lık blok boyutu (Genellikle Windows değeri -1'dir.)

*/

/*
    $dosya = "deneme.txt";
    $bilgi = stat($dosya);

    echo "<pre>";
    print_r($bilgi);
    echo "</pre>";
      clearstatcache();
    */

/*
    $dosya = "deneme.txt";
    $ac= fopen($dosya, "r");
    $bilgi = fstat($ac);

    echo "<pre>";
    print_r($bilgi);
    echo "</pre>";
      clearstatcache();
*/

  $dosya = "deneme.txt";
  $islem = stat($dosya);
  foreach ($islem as $anahtar => $deger) {
    echo $anahtar . " : " . $deger . "<br/>";
  }
  clearstatcache();
 ?>
