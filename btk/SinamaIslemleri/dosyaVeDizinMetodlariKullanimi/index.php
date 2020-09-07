<?php
/*
  file_exists()     : Dosyanın belirtilecek olan path'e(yola) bağlı olarak varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_dir()          : İçeriğinin belirtilecek olan path'e(yola) bağlı olarak dizin olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_file()         : İçeriğinin belirtilecek olan path'e(yola) bağlı olarak dosya olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_readable()     : Belirtilecek olan path'e(yola) bağlı olarak dosyanın okunabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_writeable()    : Belirtilecek olan path'e(yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_writable()     : Belirtilecek olan path'e(yola) bağlı olarak dosyanın yazılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_executable()   : Belirtilecek olan path'e(yola) bağlı olarak dosyanın çalıştırılabilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
  is_uploaded_file(): Belirtilecek olan path'e(yola) bağlı olarak dosyanın yüklenebilir olduğunu sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döndürür.
*/

  /*Örnek 1
  $dosya = "Ornek.txt";
  if (file_exists($dosya)) {
    echo "Belirtilen Dosya bulundu.";
  }else {
    echo "Belirtilen Dosya bulunamıyor.!";
  }
  !--*/

  /*Örnek 1.1
  $dosya = "ddd.txt";
  if (file_exists($dosya)) {
    echo "Belirtilen Dosya bulundu.";
  }else {
    echo "Belirtilen Dosya bulunamıyor.!";
  }
  !--*/

  /*Örnek 2
  $dosya = "Ornek";
  if (is_dir($dosya)) {
    echo "Belirtilen içerik dizindir.";
  }else {
    echo "Belirtilen içerik dizin değildir..!";
  }
!--*/

/*Örnek 2.2
$dosya = "Ornek/error";
if (is_dir($dosya)) {
  echo "Belirtilen içerik dizindir.";
}else {
  echo "Belirtilen içerik dizin değildir..!";
}
!--*/

/*Örnek 3
$dosya = "Ornek.txt";
if (is_file($dosya)) {
  echo "Belirtilen içerik dosyadır.";
}else {
  echo "Belirtilen içerik dosya değildir..!";
}
!--*/

/*Örnek 3.1
$dosya = "Ornek";
if (is_file($dosya)) {
  echo "Belirtilen içerik dosyadır.";
}else {
  echo "Belirtilen içerik dosya değildir..!";
}
 !--*/

 /*Örnek 4
 $dosya = "Ornek";
 if (is_readable($dosya)) {
   echo "Belirtilen dosya okunabilir bir dosyadır.";
 }else {
   echo "Belirtilen dosya okunabilir bir dosya değildir..!";
 }
!--*/

/*Örnek 5
$dosya = "Ornek";
if (is_writeable($dosya)) {
  echo "Belirtilen dosya yazılabilir bir dosyadır.";
}else {
  echo "Belirtilen dosya yazılabilir bir dosya değildir..!";
}
!--*/

/*Örnek 6
$dosya = "ornek.txt";
if (is_executable($dosya)) {
  echo "Belirtilen dosya çalıştırılabilir bir dosyadır.";
}else {
  echo "Belirtilen dosya çalıştırılabilir bir dosya değildir..!";
}
!--*/

/*Örnek 7
$dosya = "ornek.txt";
if (is_uploaded_file($dosya)) {
  echo "Belirtilen dosya yüklenebilir bir dosyadır.";
}else {
  echo "Belirtilen dosya yüklenebilir bir dosya değildir..!";
}
!--*/
