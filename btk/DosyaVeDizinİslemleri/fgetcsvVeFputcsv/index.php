<?php

/*
  fgetcsv() : Belirtilecek olan csv dosyası içeriğini kontrol ederek ve bilgileri satır satır bularak,
  bulduğu değeri geriye döndürür. Ayrıca tüm dosya içerisinde bulunan satır verileri herhangi bir
  döngü yardımıyla elde edilebilir.
  fputcsv() : Belirtilecek olan csv dosyasına, Belirtilecek olan verileri yazmak için kullanılır. Ayrıca
  istenirse işlem sonucunda yazılan karakter sayısı değerini bularak, bulduğu değeri geriye döndürür.
*/

/*
$dosya = "ornek.csv";
$dosyaAc = fopen($dosya, "r");
while ($cozumle=fgetcsv($dosyaAc)) {
  $oku = $cozumle[0];
  echo iconv("iso-8859", "utf-8", $oku ). "<br>";
}
fclose($dosyaAc);
*/

$icerikler = array(
"Barış, hamdi, murtaza, maden, gemi, tren, 0123 321  31 13"
);

$dosya = "ornek.csv";
$dosyaAc = fopen($dosya, "w");

foreach ($icerikler as $deger) {
  fputcsv($dosyaAc, explode(",", iconv("utf-8","iso-8859-9", $deger)), ";");
}
fclose($dosyaAc);
 ?>
