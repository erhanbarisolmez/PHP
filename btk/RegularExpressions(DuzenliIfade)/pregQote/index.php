<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

  /*
  preg_quote() : Kendisine parametre olarak verilen içeriği kontrol eder ve içerik dahilinde
  özek karakter / karakterlerin bulunması durumunda, bulunan özel karakter / karakterlerin önüne
  \ ters slash ekleyerek yeni bir içerik oluşturur ve oluşturduğu içeriği geriye döndürür.
  Özel Karakterler: . \ + * ^ $ = ? ! | : -  [] () {} < >
  */
  /* Ornek 1
      $deger = "Merhaba nasılsınız?";
      $islem = preg_quote($deger);

      echo "Orjinal içerik : " . $deger . "<br>";
      echo "Değişen içerik : " . $islem . "<br>";
      */
      $deger = "Merhaba nasılsınız? Nerelisiniz? Adınız ne?";
      $islem = preg_quote($deger,"e");

      echo "Orjinal içerik : " . $deger . "<br>";
      echo "Değişen içerik : " . $islem . "<br>";
   ?>
  </body>
</html>
