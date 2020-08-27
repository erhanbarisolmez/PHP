<?php
  $GelenDosya = $_FILES["Dosya"];
  $GelenDosyaAdi = $GelenDosya["name"];
  $GelenDosyaTipi = $GelenDosya["type"];
  $GelenDosyaYolu = $GelenDosya["tmp_name"];
  $GelenDosyaBoyutu = $GelenDosya["size"];

  $dosyaYolu = "resimler/";
  $dosyaYoluVeAdi = $dosyaYolu. $GelenDosyaAdi;
if (move_uploaded_file($GelenDosyaYolu, $dosyaYoluVeAdi)) {
  echo "Yükleme Başarılı.";
  echo "Dosyanın Adı : " . $GelenDosyaAdi . "<br>";
  echo "Dosyanın Türü : " . $GelenDosyaTipi . "<br>";
  echo "Dosyanın Yolu : " . $GelenDosyaYolu . "<br>";
  echo "Dosyanın Boyutu : " . $GelenDosyaBoyutu . "<br>";
  echo "<img src='{$dosyaYoluVeAdi}'>";
}else {
  echo "########HATA#######";
}


 ?>
