<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
preg_filter() : Kendisine parametre olarak verilen düzenli ifadeli değer / değerler doğrultusunda
içeriği kontrol eder ve aranan değerin değerlerin eşleşmesi durumunda, eşleşen değerin / değerlerin
değişmesini sağlayarak yeni bir içerik veya dizi oluşturarak, oluşturduğu içeriği ve diziyi geriye döndürür.
preg_replace() : Kendisine parametre olarak verilen düzenli ifadeli değer / değerler doğrultusunda
içeriği kontrol eder ve aranan değerin değerlerin eşleşmesi durumunda, eşleşen değerin / değerlerin
değişmesini sağlayarak yeni bir içerik veya dizi oluşturarak, oluşturduğu içeriği ve diziyi geriye döndürür.
    */
    /*$icerik = " Kendisine parametre olarak verilen düzenli ifadeli değer";*/
    $icerik = array(22,27,52,102,"23:02:22");
    $ara = array("/2/");
    $degistir = array("1");
    /*$ara = array("/parametre/", "/değer/"); birden fazla desen ve değişecek içerik için dizi yapılıyor. */
    /*$degistir = array("PARAMETRE", "DEĞER");*/
    $sonuc = preg_replace($ara, $degistir, $icerik);
    echo "orjinal içerik : <br /> ";
    echo "<pre>";
    print_r($icerik);
    echo "</pre>";
    echo "<br><br><br>";
    echo "Değişen içerik : <br /> ";
    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    /*
    echo "orjinal içerik : " . "<br>" . $icerik ." <br>" . " <br>";
    echo "değişen içerik : " . "<br>" . $sonuc . " <br><br>";
    */
    ?>

  </body>
</html>
