<?php

/*

file()      : Belirtilecek olan dosya ya da url içeriğini kontrol ederek ve bilgileri satır satır bularak bulduğu değerlerden
yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
readfile()  : Belirtilecek olan dosya ya da url içeriğini kontrol ederek ve bilgileri tek bir defada  bularak bulduğu değeri
geriye döndürür. Ayrıca dosyalara download veya transfer özelliği atamak için kullanılır.


*/

/*
  $icerik = "belge.txt";
  $icerikOku = file($icerik);

  foreach ($icerikOku as $anahtar => $eleman) {
    echo "Anahtar : " . $anahtar . " İçerik : " . $eleman ."<br>";
  }
*/

/*
  $icerikOku = file("https://www.hepsiburada.com");
  echo "<pre>";
  foreach ($icerikOku as $anahtar => $eleman) {
    echo  htmlspecialchars ($eleman) ."<br>";
  }
  echo "<pre/>";
  */

  /*
  $icerik = "belge.txt";
  $icerikOku = readfile($icerik);
echo $icerikOku;
*/

/*
$icerikOku = readfile("https://www.hepsiburada.com");
htmlspecialchars($icerikOku);
*/

$dosya = "belge.txt";
header("Content-Description: File Transfer");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=".basename($dosya));
header("Content-Transfer-Encoding: binary");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: public");
header("Content-Length:". filesize($dosya));
ob_clean();
flush();
readfile($dosya);
 ?>
