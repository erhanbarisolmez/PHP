<?php
/*

mkdir() : Belirletelecek olan değer ve izinler doğrultusunda yeni bir dizin oluşturmak için kullanılır.
  Ayrıca istenirse işlem türünü boolean(mantıksal) veri türünde döndürmek için kullanılır.
rmdir() : Belirletelecek olan değer ve izinler doğrultusunda dizin silmek için kullanılır.
  Ayrıca istenirse işlem türünü boolean(mantıksal) veri türünde döndürmek için kullanılır.

*/

/*
$dizin = "Resimler";
mkdir("Resimler");
*/
/*
$dizin = "Resimler";
mkdir($dizin, 0777);
*/

$dizin = "Resimler";
$sonuc = rmdir($dizin);

if ($sonuc == "1") {
  echo "Dizin Başarıyla Silindi...";
}else {
echo "##HATA##";
}


 ?>
