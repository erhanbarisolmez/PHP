<?php
/*
date_create_from_format() : Belirtilecek olan formata göre biçimlendirilmiş tarih değerlerine göre yeni
bir tarih dizisi nesnesi oluşturarak, oluşturduğu dizi tarih değerini geriye döndürür.

date_format() : Oluşturulmuş olan yeni bir tarih nesnesini, belirtilecek olan bir formata göre biçimlendirdiği
değeri geri döndürür.
*/

/*
$zaman = date_create_from_format("d-m-Y","08-12-1980");// 1. Parametre : Sabitler, 2. Parametre : Tarih(Gün-Ay-Yıl )
echo "<pre>";
print_r($zaman);
echo "<pre/>";
*/
        $zaman = date_create("1980-12-20");// Yıl - Ay - Gün
        date_time_set($zaman, 20,30,16);
        $bicimlendir = date_format($zaman, "d.m.Y H:i:s");

        echo "Yeni Tarih Zaman Nesnesi Dizisinin Orjinal Hali";
        echo "<pre>";
        print_r($zaman);
        echo "<pre/>";
        echo "<br/><br/>";

        echo "Yeni Tarih Zaman Nesnesi Dizisinin Biçimlendirilmiş Hali";
        echo "<pre>";
        print_r($bicimlendir);
        echo "<pre/>";
        echo "<br/><br/>";
?>
