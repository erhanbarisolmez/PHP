<?php

/*
class : Herhangi bir programlamada belirli bir veya daha fazla işi gerçekleştirmek üzere önceden
hazırlanan nesnelere verilen isimdir.
new   : Daha önceden tanımlanmış olan herhangi bir sınıfı çağırmak için kullanılır.

KURALLAR :
1. Sınıf isimleri her zaman anlamlı olarak kullanılır.
2. Sınıf isimleri içerisinde alfanumerik değerler(a-z A-Z 0-9) ve _(alt çizgi) kullanılabilir.
3. Sınıf isimleri mutlaka bir harf veya _(alt çizgi) ile başlamalıdır.
4. Sınıf isimleri hiçbir zaman bir rakamla başlayamaz.
5. Sınıf isimleri içerisinde hiçbir zaman boşluk, türkçe karakterler ve özel karakterler kullanılamaz.
6. Sınıf isimleri tanımlanırken, PHP tarafından kullanılmakta olan isimler / tanımlar kullanılamaz.
7. Sınıf isimleri hiçbir zaman birden fazla kez kullanılamaz. (namespace (isim uzayı) kullanılması durumunda
birden fazla kez kullanılabilir.)
8. Sınıf isimleri küçük harf / büyük harf duyarlı değildir.
9. Sınıf kapsama / etki alanı kurallarına tabidir.

Yapısı :
class Isim{
  kod blokları
}
*/
/*Örnek 1
  class IsimSoyisim{

      public $ad = "Erhan Barış";
      public $soyad = "ÖLMEZ";
  }


    $kisi = new IsimSoyisim;

    echo $kisi-> ad . "<br>";
    echo $kisi-> soyad;
  */

  /*Örnek 2
  class IsimSoyisim{

      public const AD = "Erhan Barış";
      public const SOYAD = "ÖLMEZ";
  }

  $kisi = new IsimSoyisim;

  echo IsimSoyisim::AD . " ";
  echo IsimSoyisim::SOYAD;
*/


/*Örnek 3
class Deneme{

  public function EgitimBir(){
    $sonuc = "PHP Eğitim Seti";
    return $sonuc;
  }
  public function EgitimIki(){
    $sonuc = "JAVA Eğitim Seti";
    return $sonuc;
  }
}
  $nesne = new Deneme;
  $metinBir = $nesne -> EgitimBir();
  echo $metinBir. "<br/>";
  $metinIki = $nesne -> EgitimIki();
  echo $metinIki;
*/

/*Örnek 4
  class Kisi{
    public $isim = "Erhan Barış";
    public const SOYISIM = "ÖLMEZ";
    public function bilgiler(){
      $meslek = "Yazılım Geliştirici";
      $sehir = "İstanbul";
      $metin = "Mesleği: " . $meslek . "<br>" ." İl : ". $sehir;
      return $metin;
    }
  }
  $sonuc = new Kisi;
  echo "İsim Soyisim : " . $sonuc -> isim. " " . Kisi::SOYISIM . "<br>" . $sonuc ->bilgiler() ;
*/

/*Örnek 5 */
// sınıf isimleri birden fazla kez kullanabilir ama isim uzayı(namespace) kullanılmak şartıyla.
  namespace Erhan;
  class Detay{
    public $isim = "Barış";
  }
  namespace Baris;
  class Detay{
    public $isim = "Asus G752 Notebook";
  }

 ?>
