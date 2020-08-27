<?php
session_start();
 ?><!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      $gelenKullaniciAdi = $_POST["ad"];
      $gelenKullaniciSifre = $_POST["sifre"];

    if (($gelenKullaniciAdi!="") and ($gelenKullaniciSifre!="")) {
      $_SESSION["adi"] = $gelenKullaniciAdi;
      $_SESSION["sifresi"] = $gelenKullaniciSifre;
      echo " Merhaba " . $gelenKullaniciAdi . " siteye giriş yaptınız.";
      echo "<a href='cikis.php'>Çıkış Yap</a>";
    }else {
      echo "Merhaba lütfen formda herhangi bir boş alan bırakmayın.";
      echo "<a href='index.php'>Forma Dön</a>";
    }

     ?>
  </body>
</html>
