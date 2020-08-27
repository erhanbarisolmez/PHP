<?php

   $gelenDosya = $_FILES['dosya'];
   /*
   echo "<pre>";
   print_r($gelenDosya);
   echo "<pre/>";
   */
   foreach ($gelenDosya['tmp_name'] as $anahtar => $eleman){
     $anahtarDegeri = $anahtar;
     $dosyaAdi = $gelenDosya["name"][$anahtar];
     $dosyaTuru = $gelenDosya["type"][$anahtar];
     $dosyaYolu = $gelenDosya["tmp_name"][$anahtar];
     $dosyaHata = $gelenDosya["error"][$anahtar];
     $dosyaBoyutu = $gelenDosya["size"][$anahtar];

     $dosyaYuklemeDiziniVeAdi = "resimler/" . $dosyaAdi;

     if (move_uploaded_file($dosyaYolu, $dosyaYuklemeDiziniVeAdi)){
       echo "Anahtar : " . $anahtarDegeri . "<br/>";
       echo "Dosya Adı : " . $dosyaAdi . "<br/>";
       echo "Dosya Türü : " . $dosyaTuru . "<br/>";
       echo "Dosya Yolu : " . $dosyaYolu . "<br/>";
       echo "Dosya Hata : " . $dosyaHata . "<br/>";
       echo "Dosya Boyutu : " . $dosyaBoyutu . "<br/>"."<br/>";
       echo "<img src='{$dosyaYuklemeDiziniVeAdi}'><br><br>";
     }else{
       echo "#HATA..! <br />";
     }
   }
 ?>
