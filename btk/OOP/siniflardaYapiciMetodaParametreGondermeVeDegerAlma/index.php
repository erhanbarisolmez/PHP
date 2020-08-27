<?php
/*Örnek 1
  class Deneme{
    public function __construct($hostBilgisi, $veriTabaniKullaniciAdi, $veriTabaniKullaniSifresi, $veriTabaniAdi){
        $metin = "Gelen Host Bilgisi : ".$hostBilgisi ."<br>" .
        "Gelen Veritabanı Kullanıcı Adı : " . $veriTabaniKullaniciAdi. "<br>".
        "Gelen Veritabanı Kullanıcı Sifre : " . $veriTabaniKullaniSifresi ."<br>".
        "Veritabanı Bilgisi Adı : " . $veriTabaniAdi;
        echo $metin;
    }
  }

  $islem = new Deneme("localhost", "ErhanBaris", "Olmez123", "Eticaret");
*/

/*Örnek 2
class Deneme{
  public function __construct($hostBilgisi = "localhost", $veriTabaniKullaniciAdi ="EBaris", $veriTabaniKullaniSifresi="OLMEZ123", $veriTabaniAdi= "Eticaret"){
      $metin = "Gelen Host Bilgisi : ".$hostBilgisi ."<br>" .
      "Gelen Veritabanı Kullanıcı Adı : " . $veriTabaniKullaniciAdi. "<br>".
      "Gelen Veritabanı Kullanıcı Sifre : " . $veriTabaniKullaniSifresi ."<br>".
      "Veritabanı Bilgisi Adı : " . $veriTabaniAdi;
      echo $metin;
  }
}

$islem = new Deneme;
*/
/* Örnek 3*/
class Deneme{
  public function __construct($hostBilgisi = "localhost", $veriTabaniKullaniciAdi ="EBaris", $veriTabaniKullaniSifresi="OLMEZ123", $veriTabaniAdi= "Eticaret"){
      $metin = "Gelen Host Bilgisi : ".$hostBilgisi ."<br>" .
      "Gelen Veritabanı Kullanıcı Adı : " . $veriTabaniKullaniciAdi. "<br>".
      "Gelen Veritabanı Kullanıcı Sifre : " . $veriTabaniKullaniSifresi ."<br>".
      "Veritabanı Bilgisi Adı : " . $veriTabaniAdi;
      echo $metin;
  }
}

$islem = new Deneme(".8.8.8.8", "Alakent","Parola","Blog");

 ?>
