<?php

/*
  touch() : Belirtelecek olan değer doğrultusunda yeni bir dosya oluşturmak için kullanılır.
    Ayrıca istenilirse işlem sonucunu boolean(mantıksal) veri türünde döndürmek için kullanılır.

  unlink() : Belirtelecek olan değer doğrultusunda, dosya silmek için kullanılır.
    Ayrıca istenilirse işlem sonucunu boolean(mantıksal) veri türünde döndürmek için kullanılır.

  copy() : Belirtelecek olan değer doğrultusunda, dosya kopyalamak için kullanılır.
    Ayrıca istenilirse işlem sonucunu boolean(mantıksal) veri türünde döndürmek için kullanılır.

  rename() : Belirtelecek olan değer doğrultusunda, dosyayı ya da dizini yeniden adlandırmak
   veya taşımak için kullanılır.
    Ayrıca istenilirse işlem sonucunu boolean(mantıksal) veri türünde döndürmek için kullanılır.
*/

/*
  $dosya = "deneme.txt";
  $dizin = "Dosyalar/";
  $birlestir = $dizin.$dosya;
  $olustur = touch($birlestir);

  if ($olustur == "1") {
    echo "Dosy Başarıyla Oluşturuldu.";
  }else {
    echo "#hata";
  }
*/
      /*
      $dosya = "ExtraEğitim.zip";
      unlink($dosya);
      */

    $dosyaYolu = "Gecici/";
    $dosya = "Deneme.rar";
    $dosyaYoluAdi = $dosyaYolu.$dosya;

    $kopyaDosyaYolu = "Yeni/";
    $kopyaDosya = "Baris.rar";
    $kopyaDosyaYoluAdi = $kopyaDosyaYolu.$kopyaDosya;

    $KOPYALA = copy($dosyaYoluAdi,$kopyaDosyaYoluAdi);

    if ($KOPYALA == 1) {
      echo "Başarıyla kopyalandı. ";
    }else {
      echo "##DOSYA KOPYALANAMADI##";
    }
 ?>
