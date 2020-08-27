<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
    i ayarı : Düzenli ifade dahilinde kontrol edilecek olan içeriğin büyük harf / küçük harf ayrımı
    olmaksızın kontrol edilmesini sağlar.
    */
    /* ORNEK 1
    $deger = "Merhaba benim adım Erhan Barış ÖLMEZ, ben bir PHP yazılımcıyım.
    Bana mail üzerinden erhanbarisolmez@gmail.com adresinden ulaşabilirsiniz.";
    $desen = "/erhan/i";
    preg_match_all($desen, $deger, $sonuc);
    echo "Orjinal içerik : " . $deger . "<br>";
    echo "<pre>";
    print_r($sonuc);
    echo "<pre/>";
    */
    $deger = "Merhaba benim adım Erhan Barış ÖLMEZ, ben bir PHP yazılımcıyım.
    Bana mail üzerinden erhanbarisolmez@gmail.com adresinden ulaşabilirsiniz.";
    $desen = "/erhan/i";
    $degistir = "baran";
    $sonuc = preg_replace($desen, $degistir, $deger);
    echo "Orjinal içerik : " . $deger . "<br>";
    echo "Değişen içerik : " . $sonuc . "<br>";



     ?>
  </body>
</html>
