<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    /*
    preg_grep() : Kendisine parametre olarak verilen düzenli ifadeli değer doğrultusunda dizi
    içeriğini kontrol eder ve aranan değer ya da değerlerin eşleşmesi durumunda eşleşmeyi sağlayan
    içeriğin değer ya da değerlerinden yeni bir dizi oluşturarak oluşturduğu dizi değerini geri döndürür.

    */
/* ORNEK 1
        $degerler = array(22,1312,213,53,64,86);
        $desen = "/2/";
        $sonuc = preg_grep($desen, $degerler);
        echo "Dizinin orjinal hali : <br>";
        echo "<pre>";
        print_r($degerler);
        echo "<pre/><br><br>";
        echo "Eşleşen değerlerden oluşan yeni dizi: <br>";
        echo "<pre>";
        print_r($sonuc);
        echo "<pre/><br><br>";
*/
$degerler = array(22,"barış",1312,"hasan",213,53,"osman",64,"serkan",86,"kenan","eda");
$desen = "/an/";
$sonuc = preg_grep($desen, $degerler);
echo "Dizinin orjinal hali : <br>";
echo "<pre>";
print_r($degerler);
echo "<pre/><br><br>";
echo "Eşleşen değerlerden oluşan yeni dizi: <br>";
echo "<pre>";
print_r($sonuc);
echo "<pre/><br><br>";
     ?>
  </body>
</html>
