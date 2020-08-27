<?php
/*
^  : Düzenli ifade dahilinde kontrol edilecek olan içeriğin karakter diziliminin
başlangıcı ile düzenli ifade arasında eşleşme aramak için kullanılır.
*/
/* ORNEK
$icerik = "A' dan Z' ye PHP7 Görsel Eğitim Seti";
$desen = "/PHP7/";
preg_match($desen, $icerik, $sonuc);

echo "Orjinal içerik : " . $icerik . "<br>";
echo "<pre>";
print_r($sonuc);
echo "</pre>";
*/
$icerik = "PHP7 Görsel Eğitim Seti";
$desen = "/^PHP7/";
$sonuc = preg_match($desen, $icerik);

echo "Orjinal içerik : " . $icerik . "<br/>";
echo "Desen : " . $desen . "<br/>";
if ($sonuc == 1) {
echo "Düzenli ifade dahilinde aranılan değer içeriğin başında mevcuttur.";
}else{
  echo "Düzenli ifade dahilinde aranılan değer içeriğinin başında mevcut değildir.";
}
 ?>
