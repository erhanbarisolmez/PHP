<?php
/*
ftell()   : Belirtilecek olan dosya veya URL içeriğinde okumaya hazır bulunan konumu bularak
bulduğu değeri geriye döndürür.
fseek()   : Belirtilecek olan dosya veya URL içeriğinde okumaya hazır bulunan konumu değiştirerek
değiştirdiği değeri geriye döndürür.
rewind()  : Belirtilecek olan dosya veya URL içeriğinde okumaya hazır bulunan konumu sıfırlayarak
varsayılan hale döndürür.
*/

$dosya = "dosya.txt";
$dosyaAc = fopen($dosya, "r");
$konum = ftell($dosyaAc);
echo " okumaya hazır bulunan konumu : " . $konum . "<br>";
fseek($dosyaAc, 7);
$konumIki = ftell($dosyaAc);
echo " okumaya hazır bulunan konumu : " . $konumIki . "<br>";
$oku = fgets($dosyaAc);
echo $oku;
fclose($dosyaAc);
 ?>
