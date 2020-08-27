<?php
/*
$ : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter dizilerinin
 sonu ile düzenli ifade arasında bir eşleşme aramak için kullanılır.
*/
/* ORNEK1
 $icerik = "Ders Konusu : PHP'dir.";
 $desen =  "/PHP$/";
 preg_match($desen, $icerik, $sonuc);

 echo "Orjinal İçerik : " . $icerik . "<br>";
 echo "Desen : " . $desen . "<br>";
 echo "<pre>";
 print_r($sonuc);
 echo "</pre>";
 */
 /*
 $icerik = "Ders Konusu : PHP";
 $desen =  "/PHP$/";
 preg_match($desen, $icerik, $sonuc);

 echo "Orjinal İçerik : " . $icerik . "<br>";
 echo "Desen : " . $desen . "<br>";
 echo "<pre>";
 print_r($sonuc);
 echo "</pre>";
 */
 $icerik = "Ders Konusu : PHP'dir";
 $desen =  "/PHP$/";
$sonuc = preg_match($desen, $icerik, $sonuc);

 echo "Orjinal İçerik : " . $icerik . "<br>";
 echo "Desen : " . $desen . "<br>";
 if ($sonuc == 1){
   echo "Değer içerik karakter diziliminin sonunda vardır.";
 }else{
   echo "Değer içerik karakter diziliminin sonunda yoktur.";

 }
 ?>
