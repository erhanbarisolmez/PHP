<?php

/*

file_get_contents() : Belirtilecek olan dosya veya URL(Uniform Resource Locator)( Nizami Kaynal Bulucu) içeriğini kontrol ederek ve bilgileri tek
defada bularak, bulduğu değeri geriye döndürür.
file_put_contents() : Belirtilecek olan dosyaya, belirtilecek olan verileri yazmak için kullanılır. Ayrıca istenirse işlem sonucunda yazılan karakter
sayısı değerini bularak bulduğu değeri geriye döndürür.
    FILE_APPEND : Eski içerikler silinmeden yeni içerikler sona eklenir.
*/

/*
$dosya = "ornek.txt";
$dosyaOku = file_get_contents($dosya);
echo $dosyaOku;
*/
$icerik = "FILE_APPEND : Eski içerikler silinmeden yeni içerikler sona eklenir."; // Eski : file_put_contents() Eğitim Videosu
$dosya = "ornek.txt";
$dosyaYaz = file_put_contents($dosya, $icerik, FILE_APPEND);

echo $dosyaYaz;
 ?>
