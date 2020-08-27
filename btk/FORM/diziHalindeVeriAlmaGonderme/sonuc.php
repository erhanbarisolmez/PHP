<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $gelenAdiSoyadi = $_POST["Isim"];
      $gelenHobiler = $_POST["Hobiler"];

      echo "Adınız Soyadınız : " . $gelenAdiSoyadi. "<br>";
      echo "Hobileriniz:" . "<br>";

      foreach ($gelenHobiler as $bilgiler) {
        echo $bilgiler . "<br>";
      }
     ?>
  </body>
</html>
