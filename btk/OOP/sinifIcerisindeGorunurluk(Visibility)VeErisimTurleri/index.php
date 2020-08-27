<?php
/*
  public    : Genel, Her yerden erişebilir.
  private   : Özel, Sadece sınıf içerisinden erişebilir.
  protected : Korumalı, Sınıf içerisinden ve türetilen sınıflardan erişebilir.

  static    : Sabit. Sınıf içerisindeki herhangi bir özellik veya metoda sınıf çağırılmadan erişilir.

  $this     : Bu sınıfda şeklinde sınıfı işaret etmek için kullanılır.
  self::    : Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
  parent::  : Ebeveyn sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
*/

/* ÖRNEK 1
  class Bir{
    public $isim = "Barış";
    public const SOYISIM = "ÖLMEZ";

    public function bilgi(){
      $metin = "A'dan Z'ye PHP Görsel Eğitim Seti";
      return $metin;
    }
  }
  $nesne = new Bir;
  echo "İsim ve soyisim : " . $nesne -> isim . " " . Bir::SOYISIM . " " . $nesne -> bilgi();
-!*/

/* ÖRNEK 2
  class Bir{
    public $isim = "Barış";
    public const SOYISIM = "ÖLMEZ";

    public function bilgi(){
      $metin = "İsim Soyisim : " . $this->isim . " " . self::SOYISIM. "<br>";
      return $metin;
    }
  }
  $nesne = new Bir;
  echo $nesne->bilgi();
  -!*/

/*ÖRNEK 3
  class Bir{
    private $isim = "Barış";
    private const SOYISIM = "ÖLMEZ";

    public function bilgi(){
      $metin = "İsim Soyisim : " . $this->isim . " " . self::SOYISIM. "<br>";
      return $metin;
    }
  }
  $nesne = new Bir;
  echo $nesne->bilgi();
  -!*/

  /*ÖRNEK 4
  class Bir{
    protected $isim = "Barış";
    protected const SOYISIM = "ÖLMEZ";
}

    class Iki extends Bir{
      public function bilgi(){
        $metin = "İsim Soyisim : " . $this->isim . " " . self::SOYISIM. "<br>";
        return $metin;
    }
  }

  $nesne = new Iki;
  echo $nesne->bilgi();
  -!*/

  /*ÖRNEK 5
  class Bir{

    public function bilgi(){
      $metin = "PHP";
      return $metin;
  }
  }

    class Iki extends Bir{

      public function bilgi(){
        $metin = "JAVA" . parent::bilgi();;
        return $metin;
    }
  }

  $nesne = new Iki;
  echo $nesne->bilgi();
-!*/

  /*ÖRNEK 6
class Dersler{

  public function AAA(){
    $icerik = "A'dan Z'ye PHP Eğitim Seti <br><br><br>";
    return $metin;
}
public function BBB(){
  $icerik = "A'dan Z'ye JS Eğitim Seti<br><br><br>";
  return $metin;
}
public function CCC(){
  $icerik = "A'dan Z'ye JAVA Eğitim Seti<br><br><br>";
  return $metin;
}
}

  class Egitmenler extends Dersler{

    public function AAA(){
      $kim = "Erhan <br><br><br>";
      return $kim;
      parent::AAA();
  }
  public function BBB(){
      $kim = "Barış<br><br><br>";
      return $kim;
      parent::AAA();
  }
  public function CCC(){
      $kim = "Ölmez<br><br><br>";
      return $kim;
      parent::AAA();
  }
}

$nesne = new Egitmenler;
echo $nesne->AAA();
echo $nesne->BBB();
echo $nesne->CCC();
-!*/

/*ÖRNEK 7
class Islem{
  public static $isim = "Barış";
}

echo Islem::$isim; //static ifadesi const'da çalışmaz.
-!*/

/*ÖRNEK 7
  class Islem{
    public static function bilgiVer(){
      echo "Erhan Barış ÖLMEZ";
    }
  }
  Islem::bilgiVer();
  -!*/
 ?>
