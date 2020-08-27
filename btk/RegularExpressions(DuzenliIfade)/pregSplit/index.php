<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
/*
preg_split() : Kendisine parametre olarak verilen düzenli ifadeli
değer doğrultusunda içeriği kontrol eder ve eşleşmeyi sağlayan değer/
değerlerden içeriği bölümleyerek yeni bir dizi oluşturarak, oluşturduğu
dizi değerini geriye döndürür.
*/
  /*
    $icerik = " Kendisine parametre olarak verilen düzenli ifadeli
    değer doğrultusunda içeriği kontrol eder ve eşleşmeyi sağlayan değer/
    değerlerden içeriği bölümleyerek yeni bir dizi oluşturarak, oluşturduğu
    dizi değerini geriye döndürür.";
    $desen = "/ /";
    $sonuc = preg_split($desen, $icerik);
    echo "Orjinal İçerik : <br>" . $icerik . "<br><br>";
    echo "<pre>";
    print_r($sonuc);
    echo "/<pre>";
    */
    $icerik = "Kendisine parametre olarak verilen düzenli ifadeli
    değer doğrultusunda içeriği kontrol eder.";
    $desen = "/değer/u"; /* u ayarı türkçe karakter*/
    $sonuc = preg_split($desen, $icerik);
    echo "Orjinal İçerik : <br>" . $icerik . "<br><br>";
    echo "<pre>";
    print_r($sonuc);
    echo "/<pre>";
     ?>
  </body>
</html>
