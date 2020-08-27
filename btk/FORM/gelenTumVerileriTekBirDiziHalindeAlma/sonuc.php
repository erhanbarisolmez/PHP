<?php
  $gelenAdınız = $_POST["ad"];
  $gelenSoyadınız = $_POST["soyad"];
  $gelenTelefon = $_POST["telefon"];
  $gelenEMail   = $_POST["mail"];
  $gelenDosya = $_FILES["dosya"];

echo "Adınız : " . $gelenAdınız . "<br>";
echo "Soyadınız : " . $gelenSoyadınız . "<br>";
echo "Telefon : " . $gelenTelefon . "<br>";
echo "E-Mail : " . $gelenEMail . "<br><br><br><br><br>";

$gelenTumDegerler = $_POST;

echo "<pre>";
print_r($gelenTumDegerler);
echo "<pre>";


foreach ($gelenTumDegerler as $key => $value) {
  echo $key . " : ". $value . "<br>";
}
echo "<br><br><br><br><br><br><br><br>";
foreach ($gelenDosya as $anahtar => $icerik ) {
  echo $anahtar . " : " . $icerik . "<br>";
}

 ?>
