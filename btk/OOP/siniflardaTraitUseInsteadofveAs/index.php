<?php
/*
  trait     : Sınıflar için özellik ve metod gruplarının oluşturulması için kullanılır.
  use       : Daha önceden tanımlanmış olan herhangi bir özellik veya metod grubunu ilgili sınıfa tanımlamak için kullanılır.
  insteadof : Sınıf için tanımlanmış olan özellik ve metod gruplarında tercih ya da seçim işlemleri için kullanılır.
  as        : Sınıf için tanımlanmış olan özellik ve metod gruplarında, metoda takma isim belirleme veya görünürlük atama işlemleri için kullanılır.
*/

/* ÖRNEK 1
  trait Kisi{
    public $isim = "Erhan Barış";
    public $soyIsim = "ÖLMEZ";

    public function tanimlar(){
      $metin = "A'dan Z'ye PHP Görsel Eğitim Seti...";
      return $metin;
    }
  }
  class Deneme{
    use Kisi;
  }

  $sonuc = new Deneme;
  echo $sonuc -> isim. " ";
  echo $sonuc -> soyIsim. "<br/>";
  echo $sonuc -> tanimlar();
-!*/

/* ÖRNEK 2
trait Kisi{
  public $isim = "Erhan Barış";
  public const SOYISIM = "ÖLMEZ"; // Hata kodu döndürür; trait'ler tüm sınıf yapısının özelliklerine sahiptir sadece const tanımı kullanılamaz.

  public function tanimlar(){
    $metin = "A'dan Z'ye PHP Görsel Eğitim Seti...";
    return $metin;
  }
}
class Deneme{
  use Kisi;
}

$sonuc = new Deneme;
echo $sonuc -> isim. " ";
echo DENEME::SOYISIM;
echo $sonuc -> tanimlar();
-!*/

/* ÖRNEK 3
trait AdSoyad{
  public $isim = "Erhan Barış";
  public $soyIsim = "ÖLMEZ";
}
trait Bilgi{
  public function tanimlar(){
    $metin = "A'dan Z'ye PHP Görsel Eğitim Seti...";
    return $metin;
  }
}
class Deneme{
  use AdSoyad, Bilgi;
}

$sonuc = new Deneme;
echo $sonuc -> isim. " ";
echo $sonuc -> soyIsim. "<br/>";
echo $sonuc -> tanimlar();
-!*/

/* ÖRNEK 4
trait AdSoyad{
  public $isim = "Erhan Barış";
  public $soyIsim = "ÖLMEZ";
}
trait Bilgi{
  use Adsoyad;
  public function tanimlar(){
    $metin = "A'dan Z'ye PHP Görsel Eğitim Seti...";
    return $metin;
  }
}
class Deneme{
  use  Bilgi;
}

$sonuc = new Deneme;
echo $sonuc -> isim. " ";
echo $sonuc -> soyIsim. "<br/>";
echo $sonuc -> tanimlar();
-!*/

/* ÖRNEK 5
trait AdSoyad{
  public $isim = "Erhan Barış";
  public $soyIsim = "ÖLMEZ";
}
trait Bilgi{

  public function tanimlar(){
    $metin = "A'dan Z'ye PHP Görsel Eğitim Seti...";
    return $metin;
  }
}
trait KisiBilgileri{
  use Adsoyad;
  use  Bilgi;
}
class Deneme{
  use  KisiBilgileri;
}

$sonuc = new Deneme;
echo $sonuc -> isim. " ";
echo $sonuc -> soyIsim. "<br/>";
echo $sonuc -> tanimlar();
-!*/

/* ÖRNEK 6
trait KisiBir{
public $ozellikBir = "AAA";
  public function goster(){
    $isimSoyisim = "John Doe";
    return $isimSoyisim;
  }
}
trait KisiIki{
public $ozellikIki = "BBB";
  public function goster(){
    $isimSoyisim = "Erhan Barış ÖLMEZ";
    return $isimSoyisim;
  }
}

class Deneme{
  use  KisiBir, KisiIki{ KisiBir::Goster insteadof KisiIki; } // insteadof ile seçip KisiBir'i KisiIki'ye aktarıyor.
}

$sonuc = new Deneme;
echo $sonuc -> ozellikBir . "<br>";
echo $sonuc -> ozellikIki . "<br>";
echo $sonuc -> goster();
-!*/

/* ÖRNEK 7
trait KisiBir{
public $ozellikBir = "AAA";
  public function goster(){
    $isimSoyisim = "John Doe";
    return $isimSoyisim;
  }
}
trait KisiIki{
public $ozellikIki = "BBB";
  public function goster(){
    $isimSoyisim = "Erhan Barış ÖLMEZ";
    return $isimSoyisim;
  }
}

class Deneme{
  use KisiBir, KisiIki { KisiIki::Goster insteadof KisiBir; } // insteadof ile seçip KisiIki'yi KisiBir'e aktarıyor.
}

$sonuc = new Deneme;
echo $sonuc -> ozellikBir . "<br>";
echo $sonuc -> ozellikIki . "<br>";
echo $sonuc -> goster();
-!*/

/* ÖRNEK 7
trait KisiBir{
public $ozellikBir = "AAA";
  public function goster(){
    $isimSoyisim = "John Doe";
    return $isimSoyisim;
  }
}
trait KisiIki{
public $ozellikIki = "BBB";
  public function goster(){
    $isimSoyisim = "Erhan Barış ÖLMEZ";
    return $isimSoyisim;
  }
}

class Deneme{
  use KisiBir, KisiIki { KisiIki::Goster insteadof KisiBir; KisiIki::Goster as YeniMetodAdi; } // insteadof ile seçip KisiIki'yi KisiBir'e aktarıyor.
}

$sonuc = new Deneme;
echo $sonuc -> ozellikBir . "<br>";
echo $sonuc -> ozellikIki . "<br>";
echo $sonuc -> YeniMetodAdi();
-!*/

/* ÖRNEK 7
trait Kisi{
  public function goster(){
    $isimSoyisim = "Erhan Barış";
    return $isimSoyisim;
  }
}

class Deneme{
  use Kisi { Kisi::goster as yaz;}
}
$sonuc = new Deneme;
echo $sonuc -> yaz();// goster() şeklinde de hatasız çalışır.
-!*/

/* ÖRNEK 7
trait KisiBir{
  public function goster(){
    $isimSoyisim = "Erhan Barış";
    return $isimSoyisim;
  }
}

trait KisiIki{
  public function goster(){
    $isimSoyisim = "Kişi İki";
    return $isimSoyisim;
  }
}

class Deneme{
  use KisiBir, KisiIki {
    KisiBir::goster insteadof KisiIki;
      KisiBir::goster as yazBir;
      KisiIki::goster as yazIki;
   }
}
$sonuc = new Deneme;
echo $sonuc -> yazBir() . " <br>";
echo $sonuc -> yazIki();
 -!*/

/* ÖRNEK 8
trait Kisi{
  public function goster(){
    $isimSoyisim = "Erhan Barış";
    return $isimSoyisim;
  }
}


class Deneme{
  use Kisi{ Kisi::goster as private;} // Hata kodu döndürür; metod burada görünürlük değeri değiştirildi.
}
$sonuc = new Deneme;
echo $sonuc -> Goster();
-!*/

/* ÖRNEK 9 -!*/
trait Kisi{
  abstract public function goster();
}

class Deneme{
  use Kisi;
  function goster(){
    $isimSoyisim = "Erhan Barış";
    return $isimSoyisim;
  }
  }

  $sonuc = new Deneme;
  echo $sonuc -> goster();
