<?php
/*
  ?= : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter dizilimi
  içerisindeki belirtilen bir refaras önünde düzenli ifade ile eşleşebilecek
  değer / değerleri aramak için kullanılır.
  ?! : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter dizilimi
  içerisindeki belirtilen bir referas önünde düzenli ifade ile takip edilmeyen
  düzenli ifade ile eşleşebilecek değer / değerleri aramak için kullanılır.
*/

/* ORNEK 1
$icerik = "PHP dünya üzerinde en yaygın olarak kullanılan web programlama dilidir ve
php'yi öğrenmesi çok kolaydır.";
$desen = "/PHP(?='yi)/i";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal Metin : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
*/
$icerik = "PHP dünya üzerinde en yaygın olarak kullanılan web programlama dilidir ve
php'yi öğrenmesi çok kolaydır.";
$desen = "/PHP(?!')/i";
preg_match_all($desen, $icerik, $sonuc);

echo "Orjinal Metin : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
?>
