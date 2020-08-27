<?php

  /*
time()          : Geçerli zamanı Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
mktime()        : Belirtelecekolan zamanı Unix zaman damgası değerini bularak, bulduğu değeri geriye döndürür.
microtime()     : Geçerli zamanı Unix zaman damgası  ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
gettimeofday()  : Geçerli zamanı Unix zaman damgası, mikro saniye, yaz saati uygulaması ve greenwich batısı değerlerinden
yeni bir dizi oluşturarak, oluşturduğu dizi değerini geriye döndürür. Ayrıca istenirse string olarak da geçerli zamanın Unix
zaman damgası ve mikro saniye değerini bularak, bulduğu değeri geriye döndürür.
  */

  /* 1
  $zamanDamgasi = time();
  echo "Zaman Damgası : " . $zamanDamgasi;
*/


  $zamanDamgasi = mktime(15, 20, 55, 12,8, 1980); //1. den farkı (saat, dakika, saniye, ay, gün, yıl) belirtebiliyoruz.

  echo "Zaman Damgası : " . $zamanDamgasi;
$geriCevir = date("d.m.Y H.i.s");
echo "Tam Tarih <br>" . $geriCevir;


bitmedi
 ?>
