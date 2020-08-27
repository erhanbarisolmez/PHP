<?php

/*

feof()  : Belirtilecek olan dosya ve URL içeriğinin sonuna kadar okunup okunmadığını tespit etmek için kullanılır.

fgets() : Belirtilecek olan dosya ve URL içeriğini kontrol ederek ve bilgileri satır satır bularak, bulduğu değeri

geriye döndürür. Ayrıca tüm içerikte bulunan satır verileri herhangi bir döngü ile elde edilebilir.

fgetc() : Belirtilecek olan dosya ve URL içeriğini kontrol ederek ve bilgileri karakter karakter bularak, bulduğu değeri
geriye döndürür. Ayrıca tüm içerikte bulunan satır verileri herhangi bir döngü ile elde edilebilir.

fread() : Belirtilecek olan dosya ve URL içeriğini kontrol ederek ve bilgileri karakter değerlerine bölünmüş içerikleri,
bularak bulduğu değeri geriye döndürür. Ayrıca tüm içerikte bulunan ve belirtilecek karakter değerlerine bölünmüş verileri
herhangi bir döngü ile elde edilebilir.

fpassthru() : Belirtilecek olan dosya ve URL içeriğini kontrol ederek ve tüm içeriği bir defada bularak, bulduğu değeri
geriye döndürür.

*/

/*
  $dosya = "Dosya.txt";
  $dosyaAc = fopen($dosya, "r");

  $oku = fgets($dosyaAc);

  echo $oku;
  */

  /*
  $dosya = "Dosya.txt";
  $dosyaAc = fopen($dosya, "r");

  $oku = fgetc($dosyaAc);

  echo $oku;
  */

/*
  $dosya = "Dosya.txt";
  $dosyaAc = fopen($dosya, "r");

  $oku = fread($dosyaAc, 15);

  echo $oku;
  */
  /*
  $dosya = "Dosya.txt";
  $dosyaAc = fopen($dosya, "r");

  $oku = fpassthru($dosyaAc);

  echo $oku;
  */
$dosya = "Dosya.txt";
$dosyaAc= fopen($dosya, "r");

while (!feof($dosyaAc)) {
  $oku = fgets($dosyaAc). "<br>";
  echo $oku;
}
fclose($dosyaAc);
 ?>
