<?php

/*

filetype() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya mı ya da dizin mi
  olduğunu bularak, bulduğu değeri geriye döndürür. (Dosya : file & Klasör/Dizin : dir)
fileowner() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi mi değerini
   bularak, bulduğu değeri geriye döndürür.
filegroup() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya sahibi grubu değerini
  bularak, bulduğu değeri geriye döndürür.
fileinode() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya düğüm numarası değerini
  olduğunu bularak, bulduğu değeri geriye döndürür.
fileperms() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya erişim izni değerini
   bularak, bulduğu değeri geriye döndürür.
filesize() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın dosya boyutu değerini
  bularak, bulduğu değeri geriye döndürür.
filectime() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde
  dosya oluşturma tarihi değerini bularak, bulduğu değeri geriye döndürür.
filemtime() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde
  dosya değiştirme tarihi değerini bularak, bulduğu değeri geriye döndürür.
fileatime() : Belirtilecek olan değer doğrultusunda, ilgili kaynağın Unix zaman damgası türünde
  dosya son erişim tarihi değerini bularak, bulduğu değeri geriye döndürür.

*/

  $dosya = "resimler"; // ornek.rar ...
  $sor = filetype($dosya);  // fileowner filegroup ...

  echo $dosya . " => içeriği bir  -> " . $sor;
