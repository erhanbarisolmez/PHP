<?php
/*
  \b : Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun
  olabilecek metin parçalarını, karakter dizilimi içerisindeki kelimelerin başında ya
  da sonunda aramak için kullanılır.
  \B : Düzenli ifade dahilinde kontrol edilecek olan içeriğin düzenli ifadeye uygun
  olabilecek metin parçalarını, karakter dizilimi içerisindeki kelimelerin içerisinde
  aramak için kullanılır.
*/

/* Ornek 1
  $icerik = "Türkiye'nin en meşhur yoğurtlarından birisi de kanlıca yoğurdudur.";
  $desen = "/\bkan/";
  $sonuc = preg_match($desen, $icerik);

  echo "Orjinal metin : " . $icerik . "<br>";
  echo "Desen : " . $desen . "<br>";
  echo "Sonuç : " .$sonuc;
*/

/*
$icerik = "Türkiye'nin en meşhur yoğurtlarından birisi de susurluk yoğurdudur.";
$desen = "/\bkan/";
$sonuc = preg_match($desen, $icerik);

echo "Orjinal metin : " . $icerik . "<br>";
echo "Desen : " . $desen . "<br>";
echo "Sonuç : " .$sonuc;
*/
$icerik = "Türkiye'nin en meşhur yoğurtlarından birisi de susakan yoğurdudur.";
$desen = "/kan\B/";
$sonuc = preg_match($desen, $icerik);

echo "Orjinal metin : " . $icerik . "<br>";
echo "Desen : " . $desen . "<br>";
echo "Sonuç : " .$sonuc;
 ?>
