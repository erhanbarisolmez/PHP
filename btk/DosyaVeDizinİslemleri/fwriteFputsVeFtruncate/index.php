<?php
/*

fwrite()    : Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır.
Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri
geriye döndürür.
fputs()     : Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır.
Ayrıca istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri
geriye döndürür.
ftruncate() : Belirtilecek olan dısya verisinin, belirtilecek olan karakter numarasından sonraki
tüm karakterleri silmek için kullanılır.
Ayrıca istenirse işlem sonucusunu booelean veri türünden döndürmek için kullanılır.

*/

/*
$icerik = "Merhaba, benim adım Barış ve bu bir test yazısıdır.";
$dosya = "belge.txt";
$dosyaAc = fopen($dosya, "w");

fwrite($dosyaAc, $icerik);


fclose($dosyaAc);
*/

/*
$icerik = "Merhaba, benim adım Barış ve bu bir test yazısıdır.";
$dosya = "belge.txt";
$dosyaAc = fopen($dosya, "a");

ftruncate($dosyaAc, 0);


fclose($dosyaAc);
*/

/*
$URLadresi = "https://www.hepsiburada.com";
$URLoku = file($URLadresi);
$icerik = "";

foreach ($URLoku as $deger) {
  $icerik .= $deger;
}
$dosya = "belge.txt";
$dosyaAc = fopen($dosya, "w");

$sonuc = fwrite($dosyaAc, $icerik);

if ($sonuc >0) {
  echo $URLadresi. " adresi içeriği " . $dosya ."dosyasına başarıyla yazıldı.";
}else {
  echo $URLadresi . "adresi içeriği " . $dosya . " dosyasına yazılamadı!";
}

fclose($dosyaAc);
*/
$URLadresi = "https://www.sahibinden.com";
$URLoku = file($URLadresi);
$icerik = "";

foreach ($URLoku as $deger) {
  $icerik .= $deger;
}
$dosya = "ornek.html";
$dosyaAc = fopen($dosya, "w");

$sonuc = fwrite($dosyaAc, $icerik);

if ($sonuc >0) {
  echo $URLadresi. " adresi içeriği " . $dosya ."dosyasına başarıyla yazıldı.";
}else {
  echo $URLadresi . "adresi içeriği " . $dosya . " dosyasına yazılamadı!";
}

fclose($dosyaAc);
 ?>
