<?php

/*

getcwd() : Geçerli çalışma dizini bilgisi değerini bularak, bulduğu değeri geriye döndürür.
chdir()  : Belirtilecek olan dizin bilgisine göre geçerli çalışma dizinini değiştirmek için kulllanılır.

*/

/*
  $dizin = getcwd();

  echo "Geçerli Dizin : " . $dizin ;
*/

/*
  $dizin = getcwd();

  echo "Geçerli Dizin : " . $dizin ."<br>";

  $yeniDizin = "Resimler/";
  chdir($yeniDizin);

  $suankiDizin = getcwd();
  echo "Geçerli Dizin : " . $suankiDizin;
*/

/*
$dizin = getcwd();

echo "Geçerli Dizin : " . $dizin ."<br>";

$yeniDizin = "Resimler/";
$degistir = chdir($yeniDizin);

$suankiDizin = getcwd();
echo "Değiştir : " . $degistir .  "<br>";
echo "Geçerli Dizin : " . $suankiDizin;
*/

$dizin = getcwd();

echo "Geçerli Dizin : " . $dizin ."<br>";

$yeniDizin = "../../";
$degistir = chdir($yeniDizin);

$suankiDizin = getcwd();
echo "Değiştir : " . $degistir .  "<br>";
echo "Geçerli Dizin : " . $suankiDizin;

?>
