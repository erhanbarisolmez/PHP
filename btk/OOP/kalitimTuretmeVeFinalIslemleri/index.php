<?php

/*
extends : Bir sınıfı başka bir sınıftan türetmek istediğimiz zaman kullanılır.

final   : En son kullanılan sınıftır ve türeyen son sınıf anlamını taşır. Ayrıca metotlar
üzerinde de kullanılabilir ve final tanımlanırsa bağlı sınıflar içerisinde aynı metot adı
kullanılamaz.
*/

/*ÖRNEK 1
  class DenemeBir{
    private $isim = "barış";
  }
 DenemeIki extends DenemeBir{

  }
  $sonuc = new DenemeBir;

  echo $sonuc -> isim; // Özellik private olduğu için hata kodu döndürür.
-!*/

/*ÖRNEK 2

  class DenemeBir{
    protected $isim = "barış";
  }
   DenemeIki extends DenemeBir{

  }
  $sonuc = new DenemeBir;

  echo $sonuc -> isim; // Özellik protected olduğu için hata kodu döndürür.
-!*/

/*ÖRNEK 3
  class DenemeBir{
    protected $isim = "barış";
  }
  class DenemeIki extends DenemeBir{

    function dondur(){
      return  $this->isim;
    }
  }
  $sonuc = new DenemeIki;

  echo $sonuc -> dondur();
 -!*/

 /*ÖRNEK 4
 class DenemeBir{
   public $isim = "Erhan Barış";
   public $soyad = "Ölmez";
 }
 class DenemeIki extends DenemeBir{
   function test(){
     $birlestir = $this -> isim  . " " . $this -> soyad . " - A'dan Z'ye PHP Görsel Eğitim Seti";
     return $birlestir;
   }

 }
 $sonuc = new DenemeIki;

 echo $sonuc -> test();
 -!*/

 /*ÖRNEK 5  yanlış kullanım - 5.1 doğru kullanım
 class ElemanlarDahili{
   public $isimSoyisim;
   public $aylikGelir;
   public $aylikGider;

   public function isimGoster($adSoyad){
     $this -> isimSoyisim = $adSoyad;
   }
   public function gelirGoster($gelirTutar){
     $this -> aylikGelir = $gelirTutar;
   }
   public function giderGoster($giderTutar){
     $this -> aylikGider = $giderTutar;
   }
   public function gelirGiderHesapla(){
     $netKazanilan = $this -> aylikGelir - $this -> aylikGider;
     return $netKazanilan;
   }
   public function yillikKazanc(){
     $yillikNetKazanc = ($this -> aylikGelir - $this -> aylikGider) * 12;
     return $yillikNetKazanc;
   }

 }

 class ElemanlarHarici{
   public $isimSoyisim;
   public $aylikGelir;
   public $aylikGider;

   public function isimGoster($adSoyad){
     $this -> isimSoyisim = $adSoyad;
   }
   public function gelirGoster($gelirTutar){
     $this -> aylikGelir = $gelirTutar;
   }
   public function giderGoster($giderTutar){
     $this -> aylikGider = $gelirTutar;
   }
   public function gelirGiderHesapla(){
     $netKazanilan = $this -> aylikGelir - $this -> aylikGider;
     return $netKazanilan;
   }
   public function yillikKazanc(){
     $yillikNetKazanc = ($this -> aylikGelir - $this -> aylikGider) * 12;
     return $yillikNetKazanc;
   }

 }

 $ilkKisi = new ElemanlarDahili;
 $ilkKisi -> isimGoster("Erhan Barış ÖLMEZ");
 $ilkKisi -> gelirGoster(10000);
 $ilkKisi -> giderGoster(4000);

 echo "Erhan Barış ÖLMEZ isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
 Aylık net kazancı " . $ilkKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
 echo "Erhan Barış ÖLMEZ isimli şahsın yıllık net kazancı : " .$ilkKisi -> yillikKazanc() . " <br/><br/> ";

 $ikinciKisi = new ElemanlarDahili;
 $ikinciKisi -> isimGoster("Joe Doe");
 $ikinciKisi -> gelirGoster(5000);
 $ikinciKisi -> giderGoster(500);

 echo "Joe Doe isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
 Aylık net kazancı " . $ikinciKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
 echo "Joe Doeisimli şahsın yıllık net kazancı : " .$ikinciKisi -> yillikKazanc() . " <br/> <br/>";

 $ucuncuKisi = new ElemanlarDahili;
 $ucuncuKisi -> isimGoster("Jone Liz");
 $ucuncuKisi -> gelirGoster(550000);
 $ucuncuKisi -> giderGoster(7000);

 echo "Jone Liz isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
 Aylık net kazancı " . $ucuncuKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
 echo "Jone Liz isimli şahsın yıllık net kazancı : " .$ucuncuKisi -> yillikKazanc() . " <br/><br/> ";
-!*/

/*ÖRNEK 5.1
  class Islemler{
    public $isimSoyisim;
    public $aylikGelir;
    public $aylikGider;

    public function isimGoster($adSoyad){
      $this -> isimSoyisim = $adSoyad;
    }
    public function gelirGoster($gelirTutar){
      $this -> aylikGelir = $gelirTutar;
    }
    public function giderGoster($giderTutar){
      $this -> aylikGider = $giderTutar;
    }
    public function gelirGiderHesapla(){
      $netKazanilan = $this -> aylikGelir - $this -> aylikGider;
      return $netKazanilan;
    }
    public function yillikKazanc(){
      $yillikNetKazanc = ($this -> aylikGelir - $this -> aylikGider) * 12;
      return $yillikNetKazanc;
    }

  }

class ElemanlarDahili extends Islemler{


}

class ElemanlarHarici extends Islemler{


}

$ilkKisi = new ElemanlarDahili;
$ilkKisi -> isimGoster("Erhan Barış ÖLMEZ");
$ilkKisi -> gelirGoster(10000);
$ilkKisi -> giderGoster(4000);

echo "Erhan Barış ÖLMEZ isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
Aylık net kazancı " . $ilkKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
echo "Erhan Barış ÖLMEZ isimli şahsın yıllık net kazancı : " .$ilkKisi -> yillikKazanc() . " <br/><br/> ";

$ikinciKisi = new ElemanlarDahili;
$ikinciKisi -> isimGoster("Joe Doe");
$ikinciKisi -> gelirGoster(5000);
$ikinciKisi -> giderGoster(500);

echo "Joe Doe isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
Aylık net kazancı " . $ikinciKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
echo "Joe Doeisimli şahsın yıllık net kazancı : " .$ikinciKisi -> yillikKazanc() . " <br/> <br/>";

$ucuncuKisi = new ElemanlarHarici;
$ucuncuKisi -> isimGoster("Jone Liz");
$ucuncuKisi -> gelirGoster(550000);
$ucuncuKisi -> giderGoster(7000);

echo "Jone Liz isimli şahsın aylık geliri 10000 TL'dir. Aylık gideri 4000 TL'dir.
Aylık net kazancı " . $ucuncuKisi -> gelirGiderHesapla() . " TL'dir.<br/> ";
echo "Jone Liz isimli şahsın yıllık net kazancı : " .$ucuncuKisi -> yillikKazanc() . " <br/><br/> ";
-!*/

/*ÖRNEK 6

class Bir{

public function Deneme(){
  return "Barış";
}
}
class Iki extends Bir{
  public function Deneme(){
    return "Erhan";
  }
}
class Uc extends Iki{
  public function Deneme(){
    return "Joe";
  }
}
class Dort  extends Uc{
  public function Deneme(){
    return "Doe";
  }
}
class Bes extends Dort {
  public function Deneme(){
    return "Moe";
  }
}

$sonuc = new Bes;
echo $sonuc -> Deneme(); // Bes sınıfının metodunu silersek; kalıtım yaptığı sınıfın metodunu çalıştırır.
-!*/

/*ÖRNEK 7
class Bir{

public function Deneme(){
  return "Barış";
}
}
class Iki extends Bir{
  public function Deneme(){
    return "Erhan";
  }
}
class Uc extends Iki{
  public function Deneme(){
    return "Joe";
  }
}
class Dort  extends Uc{
  public function Deneme(){
    return "Doe";
  }
}
class Bes extends Dort {
  public function Deneme(){
    return "Moe";
  }
  public function dizi(){
    return ["Birinci " => "".Bir::Deneme(),
            "Ikinci " => Iki::Deneme(),
            "Ucuncu " => Uc::Deneme(),
            "Dorduncu" => Dort::Deneme(),
            "Besinci" => Bes::Deneme()
            ];
  }
}

$sonuc = new Bes;
print_r($sonuc -> dizi());
-!*/

/*ÖRNEK 8
class Bir{

public function Deneme(){
  return "Barış";
}
}
class Iki extends Bir{
  public function Deneme(){
    return "Erhan";
  }
}
class Uc extends Iki{
  public function degerDondur(){
    $deger = parent::Deneme();
    return $deger;
  }
}


$sonuc = new Uc;
echo $sonuc-> degerDondur();
-!*/

/*ÖRNEK 9
class Bir{

public function Deneme(){
  return "Barış";
}
}
final class Iki extends Bir{ // Iki adındaki sınıfda final ifadesi kullanıldığı için artık bu sınıftan alt sınıf veya sınıflar türetilemez.
  public function Deneme(){
    return "Erhan";
  }
}
class Uc extends Iki{
  public function degerDondur(){
    $deger = parent::Deneme();
    return $deger;
  }
}

$sonuc = new Uc;
echo $sonuc-> degerDondur();
-!*/

/*ÖRNEK 10 -!*/

class Bir{

public function Deneme(){
  return "Barış";
}
}
final class Iki extends Bir{
  final public function Deneme(){ //Deneme adındaki metotda final ifadesi kullanıldığı için artık bu metot ismi alt sınıf veya sınıflarda kullanılamaz.
    return "Erhan";
  }
}
class Uc extends Iki{
  public function degerDondur(){
    $deger = parent::Deneme();
    return $deger;
  }
}

$sonuc = new Uc;
echo $sonuc-> degerDondur();
