<?php

  $zaman = time() + (60*5); //5 dk

  /*setcookie("KullaniciAdi", "Barış", $zaman);
  setcookie("KullaniciSoyAdi", "ÖLMEZ", $zaman);
  setcookie("KullaniciMail", "baris@gmail.com", $zaman);
  setcookie("KullaniciTelefon", "500 500 10 34", $zaman);

  setcookie("SepetID", 5, $zaman);
  setcookie("SepetTutari", 1245, $zaman);
  setcookie("SepetTaksitSayisi", 6, $zaman);
  setcookie("SepetOdemeTuru", "Kredi Kartı", $zaman);*/

  setcookie("Kullanici[Adi]", "Barış", $zaman);
  setcookie("Kullanici[SoyAdi]", "ÖLMEZ", $zaman);
  setcookie("Kullanici[Mail]", "baris@gmail.com", $zaman);
  setcookie("Kullanici[Telefon]", "500 500 10 34", $zaman);

  setcookie("Sepet[ID]", 5, $zaman);
  setcookie("Sepet[Tutari]", 1245, $zaman);
  setcookie("Sepet[TaksitSayisi]", 6, $zaman);
  setcookie("Sepet[OdemeTuru]", "Kredi Kartı", $zaman);
  echo "<pre>";
  print_r($_COOKIE);//$_COOKIE["Kullanici"] - $_COOKIE["Sepet"]
  echo "</pre>";
 ?>
