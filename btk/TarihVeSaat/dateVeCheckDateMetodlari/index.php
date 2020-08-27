<?php
/*
  date()      : Tarih ve saat bilgilerini bularak, bulduğu değeri geriye döndürür. Ayrıca
  tarih ve saat bilgilerini isteğe bağlı olarak biçimlendirmek içinde kullanılır.
  checkdate() : Belirtilecek olan zamanı Gregoryen (Miladi) takvimine göre doğrulamasını yaparak,
  doğrulama sonucunu boolean (mantıksal) veri türünde döndürmek için kullanılır.
*/

/*
 $zaman = date("d.m.Y H:i:s");
 echo $zaman;
*/


/*
$zamanDamgasi = date("U");

echo "Zaman:" . $zamanDamgasi;
*/

/*
$zamanDamgasi = date("d.m.Y  H:i:s", 1527682326);

echo "Zaman : " . $zamanDamgasi;
*/

/*
*/

$deger = checkdate(12, 8, 1980); // Ay- Gün(0'sız)- YIL

if ($deger == 1) {
  echo "Girilen değer geçerlidir.";
}else {
    echo "Girilen değer geçersizdir.";
}











 ?>
