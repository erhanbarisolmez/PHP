<?php
require_once("ornek2/baris.php");
require_once("ornek2/erhan.php");
require_once("ornek2/olmez.php");
 ?>
<?php

/*
  namespace : Sınıflar için özel isim alanları / küme tanımlamak için kullanılır.
*/

/*ÖRNEK 1
class Deneme{ // Hata kodu döndürür; deneme sınıfı birden fazla kez kullanılmıştır.

}
class Deneme{

}
*/

/*ÖRNEK 2
  $bir = new \baris\Deneme;
  echo $bir -> harf ;
  $iki = new \erhan\Deneme;
  echo $iki -> harf ;
  $uc = new \olmez\Deneme;
  echo $uc -> harf ;
*/

/*ÖRNEK 3
namespace Uyeler\Volkan;
class Deneme{ // Hata kodu döndürür; namespace dokümanın başında kullanılmalıdır.

}
namespace Odemeler\KrediKarti;
class Deneme{

}
*/

/*ÖRNEK 4
require_once("ornek4/bir.php");
require_once("ornek4/iki.php");
require_once("ornek4/uc.php");

$bir = new  Uyeler\Baris\Deneme;
echo $bir -> harf . "<br>";
$iki = new  Odemeler\Baris\Test;
echo $iki -> rakam . "<br><br>";

$uc = new \Uyeler\Erhan\Deneme;
echo $uc -> harf . "<br>";
$dort = new \Odemeler\Erhan\Test;
echo $dort -> rakam . "<br><br>";

$bes = new \Uyeler\Erhan\Deneme;
echo $bes -> harf . "<br>";
$alti = new \Odemeler\Erhan\Test;
echo $alti -> rakam . "<br><br>";
*/

require_once("ornek5/ilk.php");
require_once("ornek5/son.php");

  use giris\ilk\Deneme as GO;
  use cikis\son\Deneme as FINISH;

  $bir = new GO;
  echo $bir -> metin . "<br>";

  $iki = new FINISH;
  echo $iki -> metin . "<br>";
