<?php

/*
opendir()   : Belirtilecek olan diziyi açarak, açtığı dizini belleğe almak için kullanılır.
readdir()   : opendir() metodu ile açılmış ve belleğe alınmış olan dizini  kontrol ederek, ilgili dizin içerisinde
bulunan tüm alt dizin ve dosya bilgilerini(isimler ve varsa uzantılar) okuyarak, okuduğu tüm bilgileri depolar.
Ayrıca depoladığı tüm bilgiler döngü yardımıyla elde edilebilir.
closedir()  : opendir() metodu ile açılmış ve belleğe alınmış olan dizini kapatarak, belleği boşaltır.
*/

/*
  $dizin = "./";
  $dizinAc = opendir($dizin);

  while ( ($oku = readdir($dizinAc)) != false) {
    echo "Dosya Adı : " . $oku. "<br>Türü : ". filetype($dizin.$oku) ."<br>"."<br>" ;
  }

  closedir($dizinAc);
*/

/*
$dizin = "./";
$dizinAc = opendir($dizin);

while ( ($oku = readdir($dizinAc)) != false) {
  $dosyamiDizimi =  filetype($dizin.$oku) ;
  if ($dosyamiDizimi == "dir") {
    echo "Dizin Adı : ". $oku . "<br>";
  }
}

closedir($dizinAc);
*/

$dizin = "./";
$dizinAc = opendir($dizin);

while ( ($oku = readdir($dizinAc)) != false) {
  $dosyamiDizimi =  filetype($dizin.$oku) ;
  if ($dosyamiDizimi == "file") {
    echo "Dizin Adı : ". $oku . "<br>";
  }
}

closedir($dizinAc);

 ?>
