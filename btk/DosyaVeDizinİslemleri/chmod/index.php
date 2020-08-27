<?php
/*
  chmod() : Belirtelecek olan değer ve izin doğrultusunda, ilgili kaynağın dosya / dizin erişim
  izinlerini ayarlamak için kullanılır. Ayrıca istenilirse sonucu boolean(mantıksal) veri türünde
  döndürmek için kullanılır.

*/

$dosya = "ornek.txt";
chmod($dosya,  0777);
$izinler = fileperms($dosya);

echo "erişim izni değeri : " . $izinler . "<br/>";
$bicimlendir = substr(sprintf("%o", $izinler), -3 );
echo "erişim izni değeri : " . $bicimlendir . "<br/>";


?>
