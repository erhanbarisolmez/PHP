<?php
/*
date_timestamp_get() : Oluşturulmuş olan yeni bir tarih nesnesinin, unix zaman damgası değerini bularak
bulduğu değeri geriye göndürür.
date_timestamp_set() : Oluşturulmuş olan yeni bir tarih nesnesinin, belirtilecek olan unix zaman damgası
değerini atar ve yeni bir dizi oluşturarak, oluşturduğu değeri diziye döndürür.

*/

/*
  $zaman = date_create("1992-12-04"); //Yıl-Ay-Gün
  $zamanDamgasi = date_timestamp_get($zaman);

  echo "Oluşturulmuş olan zamanın, Unix zaman damgası değeri : " . $zamanDamgasi;
  echo "<br/>" . date("d.m.Y H.i.s", $zamanDamgasi);
*/
        $zaman = date_create();
        date_timestamp_set($zaman, 723423600);
        echo "<pre>";
        print_r($zaman);
        echo "<pre/>";
 ?>
