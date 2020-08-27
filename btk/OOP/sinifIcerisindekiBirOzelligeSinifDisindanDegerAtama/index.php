<?php
/* ÖRNEK 1
  class Deneme{
    public $isim;
    public $soyIsim;
  }
  $islem = new Deneme;
  $islem -> isim = "Barış";
  $islem -> soyIsim = "ÖLMEZ";

  echo $islem -> isim . " " . $islem -> soyIsim;
*/
/*ÖRNEK 2
class Deneme{
  public $isim = "Barış";
  public $soyIsim = "ÖLMEZ";
}
$islem = new Deneme;
$islem -> isim = "Yeni Değer";
$islem -> soyIsim = " /...";

echo $islem -> isim . " " . $islem -> soyIsim . "<br>";

$islem -> isim = "Erhan";
$islem -> soyIsim = " /Barış";

echo $islem -> isim . " " . $islem -> soyIsim ."<br>";

$islem -> isim = "Barış";
$islem -> soyIsim = " /ERHAN";

echo $islem -> isim . " " . $islem -> soyIsim ."<br>";
*/
/*ÖRNEK 3*/
class Deneme{
  public const ISIM = "barış";
  public const SOYISIM = "ölmez";
}
$islem = new Deneme;
$islem -> ISIM = "Erhan";
$islem -> SOYISIM = "ÖLMEZ";
echo Deneme::ISIM . " " . Deneme::SOYISIM;
 ?>
