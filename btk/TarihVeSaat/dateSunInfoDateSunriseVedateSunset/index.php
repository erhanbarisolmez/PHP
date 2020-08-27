<?php
/*

date_sum_info()  : Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün doğumu, gün batımı,
öğleni alaca karanlık başlangıç ve alaca karanlık bitiş değerlerinden yeni bir dizi oluşturarak, oluşturduğu
dizi değerini geriye döndürür.
Parametreler : 1. Zaman Damgası, 2. Enlem, 3. Boylam

          sunrise                      : Gün Doğumu
          sunset                       : Gün Batımı
          transit                      : Öğle
          civil_twilight_begin         : Kara alacakaranlık başlangıcı
          civil_twilight_end           : Kara alacakaranlık bitişi
          nautical_twilight_begin      : Deniz alacakaranlık başlangıcı
          nautical_twilight_end        : Deniz alacakaranlık bitişi
          astronomical_twilight_begin  : Astronomik alacakaranlık başlangıcı
          astronomical_twilight_end    : Astronomik alacakaranlık bitişi

date_sunrise()   :  Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün doğumu değerini bularak
bulduğu değeri geriye döndürür.
Parametreler : 1. Zaman Damgası, 2. Kendi parametresi, 3. Enlem, 4. Boylam

date_sunset()   : Belirtilecek olan tarih ve lokasyon değerlerine göre, ilgili yerin gün batımı değerini bularak
bulduğu değeri geriye döndürür.
Parametreler : 1. Zaman Damgası, 2. Kendi parametresi, 3. Enlem, 4. Boylam

date_sunrise() ve date_sunset() metodlarınının tanımlı parametreleri :
 1. SUNFUNCS_RET_STRING : Sonuç string (alfanumerik) veri türünde değer döndürür.
 2. SUNFUNCS_RET_DOUBLE : Sonuç double (ondalık sayı) veri türünde değer döndürür.
 3. SUNFUNCS_RET_TIMESTANP : Sonuç zaman damgasını olarak döner.

*/

/*
$zamanDamgasi = strtotime("1996-04-10");
echo "10.04.1996 Tarihinin Zaman Damgası : " . $zamanDamgasi . "<br/>";

$sor = date_sun_info($zamanDamgasi,41.009568, 28.945289); //Haseki hastanesinin enlem ve boylam değerleri

foreach ($sor as $anahtar => $icerik) {
  echo $anahtar . " : " . date("d.m.Y H:i:s", $icerik) . "<br/>" ;
}
*/
        /*$zamanDamgasi = time();
        echo "Şu anın Zaman Damgası : " . $zamanDamgasi . "<br/>";

        $sor = date_sun_info($zamanDamgasi,41.009568, 28.945289); //Haseki hastanesinin enlem ve boylam değerleri

        echo "Gün doğumu : " . date("d.m.Y H.i.s", $sor["sunrise"]) . "<br/>";
        echo "Gün Batımı: " . date("d.m.Y H.i.s", $sor["sunset"]). "<br/>";
        echo "Öğle " . date("d.m.Y H.i.s", $sor["transit"]). "<br/>";
        echo "Kara alacakaranlık başlangıcı : " . date("d.m.Y H.i.s", $sor["civil_twilight_begin"]). "<br/>";
        echo "Kara alacakaranlık bitişi: " . date("d.m.Y H.i.s", $sor["civil_twilight_end"]). "<br/>";
        echo "Deniz alacakaranlık başlangıcı : " . date("d.m.Y H.i.s", $sor["nautical_twilight_begin"]). "<br/>";
        echo "Deniz alacakaranlık bitişi " . date("d.m.Y H.i.s", $sor["nautical_twilight_end"]). "<br/>";
        echo "Astronomik alacakaranlık başlangıcı : " . date("d.m.Y H.i.s", $sor["astronomical_twilight_begin"]). "<br/>";
        echo "Astronomik alacakaranlık bitişi: " . date("d.m.Y H.i.s", $sor["astronomical_twilight_end"]). "<br/>";
        */
          
            $zamanDamgasi = time();
            echo "şu anın zaman damgası : " . $zamanDamgasi ."<br>";

            $gunDogumu = date_sunrise($zamanDamgasi, SUNFUNCS_RET_STRING, 41.009568, 28.945289);
            echo "Gün DOğumu : " . $gunDogumu;










 ?>
