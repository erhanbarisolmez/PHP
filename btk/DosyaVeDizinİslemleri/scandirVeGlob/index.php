<?php
/*

scandir() : Belirtilecek olan dizin içeriğini kontrol ederek, ilgili dizin içerisinde bulunan tüm alt dizin ve dosya
bilgilerinden(isimler ve uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.

glob() :  Belirtilecek olan dizin içeriğini, belirtilecek olan kalıbı kontrol ederek, ilgili dizin içerisinde bulunan tüm alt dizin ve dosya
bilgilerinden(isimler ve uzantılar) yeni bir dizi oluşturarak, oluşturduğu değeri geriye döndürür.

  GLOB_MARK     : Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca her dizi adının sonuna bir \(ters slash) işareti ekler.
  GLOB_NOSORT   : Dizin içerisindeki tüm dizinleri ve dosyaları listeler. Ayrıca dizinlere ve dosyalara sıralama yapmaz.
  GLOB_NOCHECK  : Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm gizinleri ve dosyaları, arama kalıbıyla eşleştirerek listeler.
   Ayrıca arama kalıbına göre hiçbir eşleşme sağlanmıyorsa, arama kalıbı değerini geriye döndürür.
  GLOB_ONLYDIR  : Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri, arama kalıbı ile eşleştirerek listeler.
  GLOB_BRACE    : Belirtilecek olan genişletilmiş arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, genişletilmiş arama
  kalıbı ile eşleştirerek listeler.
  GLOB_ERR      : Belirtilecek olan arama kalıbına göre dizin içerisindeki tüm dizinleri ve dosyaları, arama kalıbı ile eşleştirerek listeler.
   Ayrıca listeleme işlemi sırasında herhangi bir hatayla karşılaşacak olur ise işlem durdurulur. (Örn; okunmayan dizinler vb. gibi)

*/

/*
$dizin = "./";
$listele = scandir($dizin, ); // 0 ve 1 ile sıralama değiştirilebilir.

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "Deneme/*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "/*";
$listele = glob($dizin);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "*";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "*";
$listele = glob($dizin, GLOB_ONLYDIR);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

/*
$dizin = "./Deneme/*.rar";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/
/*
$dizin = "*.rar";
$listele = glob($dizin, GLOB_BRACE);

echo "<pre>";
print_r($listele);
echo "</pre>";
*/

 ?>
