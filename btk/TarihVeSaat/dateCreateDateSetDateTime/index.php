<?php
  /*
    date_create() : Belirtilecek olan tarih değerlerine göre, yeni bir tarih nesnesi dizisi
    oluşturarak, oluşturduğu dizi dizi değerini geriye döndürür.
    date_date_set() : Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir
    tarihi atamak için kullanılır.
    date_time_set() : Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan yeni bir
    saati atamak için kullanılır.
  */

  $tarih = date_create("1996-4-10"); // Yıl-Ay-Gün
  date_date_set($tarih, 1990, 4,5);//Tarihin atanacağı değişken adı, yıl, gün
  date_time_set($tarih, 13,55,34); // Saatin atanacağı değişken adı, saat, dakika, saniye
  foreach ($tarih as $anahtar => $icerik) {
    echo $anahtar . " : " . $icerik . "<br/>";
  }
 ?>
