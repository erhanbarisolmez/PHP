<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
      preg_match() : Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda
      içeriği kontrol eder ve aranan değerinin eşleşmesi durumunda, eşleşlemyi sağlayan içeriğin
      değerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
      preg_match_all() : Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda
      içeriği gelişmiş olarak kontrol eder ve aranan değerinin eşleşmesi durumunda, eşleşlemyi sağlayan içeriğin
      değerinden / değerlerinden yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür.
    */

      $metin = "merhaba, bu bir test yazısıdır. ciddiye almayın test amaçlı denemedir.";
      $desen = "/test/";
      /*$desen = "/\w/";*/
      /*preg_match($desen, $metin, $sonuc);*/
      preg_match_all($desen, $metin, $sonuc);
      /*
      echo "<pre>";
      print_r($sonuc);
      echo "</pre>";
      */

      if ($sonuc) {
        echo "Aranan eşleşme içerik dahilinde var.";
      }else{
        echo "Aranan eşleşme içerik dahilinde yok.";
      }













     ?>

  </body>
</html>
