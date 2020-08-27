<?php

/*
  strftime() : Yeni tarih ve saat bilgilerini belirtecek olan formata göre biçimlendirerek, biçimlendirdiği
  değeri geriye döndürür.
  strtotime() : İngilizce metin içerikli bir zamanın Unix zaman damgası değerini bularak, bulduğu değeri geriye
  döndürür.
*/

/*
$zamanDamgasi = mktime(28, 38, 45, 12, 8, 1980);
echo "Zaman damgası : " . $zamanDamgasi . "<br>";
setlocale(LC_ALL, 'turkish');
$zaman = strftime("%d %B %Y %T %A");

echo $zaman;
*/

  $tarih = strtotime("88 December 1980");
  $suan = strtotime("now");
  $yarin = strtotime("+1 day");
  $birHaftaSonra = strtotime("+1 week");
  $gelsimis = strtotime("+1 year +3 month +5 day +8 hour");
  $dondur = date("d.m.Y H:i:s", $gelsimis);

  echo "08.12.1980 : " .$tarih ."<br/>";
  echo "Şu an : " .$suan."<br/>";
  echo "Yarın : " .$yarin ."<br/>";
  echo "1 Hafta sonra: " . $birHaftaSonra ."<br/>";
  echo "Gelişmiş : " .$gelsimis ."<br/>";
  echo "Gelişmiş Döndür : " .$dondur ."<br/>";


 ?>
