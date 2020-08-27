<?php

/*
date_diff(): Oluşturulmuş olan iki farklı tarih nesnesi arasındaki farkı hesaplayarak yeni bir
tarih sonuc nesnesi oluşturarak, oluşturduğu değeri geriye döndürür.

format(); date_diff() metodu ile hesaplanan iki tarih arasındaki farkı belirtilecek olan bir formata
göre biçimlendirerek, biçimlendirdiği değeri geriye döndürür.

*/
 /*$zaman = date_create("1996-4-10");
 $zamanIki = date_create("2020-7-25");

 $islem = date_diff($zaman, $zamanIki);

 $format = $islem->format("%y Yıl, %m Ay, %d Gün");
 echo "formatlanmış zaman farkı: " . $format;

 echo "<pre>";
 print_r($islem);
 echo "</pre>";*/

       /*$zaman = date_create("1996-4-10");
       $zamanIki = date_create("2020-7-25");

       $islem = date_diff($zaman, $zamanIki);

       $formatlaGun = $islem -> format("%d");
       $formatlaAy = $islem -> format("%m");
       $formatlaYil = $islem -> format("%y");

       $yilHesapla = $formatlaYil * 365;
       $ayHesapla = $formatlaAy * 38;
       $gunHesapla = $formatlaGun;

       $toplamSonuc = $yilHesapla + $ayHesapla + $gunHesapla;
       echo "formatlanmış zaman farkı: " . $toplamSonuc;*/

                  $ilkZaman = date_create("2020-7-25");
                  $ikinciZaman = date_create("1996-4-10");

                  $islem = date_diff($ilkZaman,$ikinciZaman);

                  $sonuc = "";

                  foreach ($islem as $anahtar => $deger) {
                    if ($anahtar == "days") {
                      $sonuc .= $deger;
                    }
                  }
                  echo "2020-7-25 ile 1996-4-10 arasındaki toplam gün farkı : " .$sonuc;
 ?>
