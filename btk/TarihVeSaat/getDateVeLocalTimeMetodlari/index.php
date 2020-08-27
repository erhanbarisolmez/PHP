<?php
/*
gatetime() : Geçerli zaman bilgileri değerinden yeni bir dizi oluşturarak, oluşturduğu
dizi değerini geriye döndürür.
localtime() : Yerel zaman bilgileri değerinden yeni bir dizi oluşturarak, oluşturduğu
dizi değerini geriye döndürür.
*/

/*    1:
    $zaman = getdate();

    echo "Yıl : " . $zaman["year"] . "<br/>";
    echo "Ay : " . $zaman["mon"] . "<br/>";
    echo "Gün : " . $zaman["mday"] . "<br/>";
    echo "Saat : " . $zaman["hours"] . "<br/>";
    echo "Dakika : " . $zaman["minutes"] . "<br/>";
    echo "Saniye : " . $zaman["seconds"] . "<br/>";
    echo "Bugün aylardan : " . $zaman["month"] . "<br/>";
    echo "Bugün günlerden : " . $zaman["weekday"] . "<br/>";
    echo "Bugün yılın : " . $zaman["yday"] . " günüdür." . "<br/>";
    echo "Bugün haftanın : " . $zaman["wday"] . " günüdür". "<br/>";
    echo "Bugünün zaman damgası :" . $zaman[0] . "<br/>";
*/

$zaman = localtime();

echo "Yıl : " . $zaman[5] ."(Yılın başlangıcı 1900 olarak kabul edilir ve değer 1900 yılından sonra kaç yıl geçtiğidir.)" ."<br/>";
echo "Ay : " . $zaman[4] . "(Bu değer 0' dan başlar. Ocak : 0 , Şubak : 1 ... şeklinde Aralık : 11 ' e kadar devam eder')" . "<br/>";
echo "Gün : " . $zaman[3] . "<br/>";
echo "Saat : " . $zaman[2] . "<br/>";
echo "Dakika : " . $zaman[1] . "<br/>";
echo "Saniye : " . $zaman[0] . "<br/>";
echo "Bugün yılın : " . $zaman[7] . " günüdür." . "<br/>";
echo "Bugün haftanın : " . $zaman[6] . " günüdür". "<br/>";
echo "Yaz saati uygulaması :" . $zaman[8] . "(1 VEYA 0) <br>";

 ?>
