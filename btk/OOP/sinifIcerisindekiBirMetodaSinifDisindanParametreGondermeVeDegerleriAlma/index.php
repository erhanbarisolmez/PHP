<?php
/*ÖRNEK 1
class Deneme{
  public function test($isim, $soyisim){
    $metin = "Merhaba, " . $isim . " " . $soyisim . " Nasılsın?";
    echo $metin;
  }
}
  $islem = new Deneme;
  $islem -> test("Erhan Barış","Ölmez");

*/

/*ÖRNEK 2
class Deneme{
  public function test($isim, $soyisim){
    $metin = "Merhaba, " . $isim . " " . $soyisim . " Nasılsın?";
    return $metin;
  }
}
  $islem = new Deneme;
  $yaz = $islem -> test("Erhan Barış","Ölmez");
  echo $yaz;
*/

/*ÖRNEK 3
class Deneme{
  public function test($isim = "Volkan", $soyisim = "Alakent"){
    $metin = "Merhaba, " . $isim . " " . $soyisim . " Nasılsın?";
    echo $metin;
  }
}
  $islem = new Deneme;
  $yaz = $islem -> test();
*/

class Deneme{
  public function test($isim = "Volkan", $soyisim = "Alakent"){
    $metin = "Merhaba, " . $isim . " " . $soyisim . " Nasılsın?";
    return $metin;
  }
}
  $islem = new Deneme;
  $yaz = $islem -> test("Erhan Barış","Ölmez");
  echo $yaz;
