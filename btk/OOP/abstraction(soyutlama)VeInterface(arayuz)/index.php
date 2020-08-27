<?php
/*
  abstract  : Belirtilecek olan herhangi bir sınıfı, soyut sınıf haline dönüştürmek için kullanılır.
  interface : Belirtilecek olan herhangi bir sınıfı, soyut arayüz haline dönüştürmek için kullanılır.
  implements: Daha önceden oluşturulmuş olan herhangi bir arayüz sınıfını ilgili sınıfa tanımlamak / uygulamak için kullanılır.

  abstract :
  1. Soyut metodlar içerebilir.
  2. Normal metodlar içerebilir.
  3. Özellikler içerebilir.
  4. Sabitler içerebilir.
  5. public, private veya protected tanımlanabilir.
  6. Herhangi bir sınıf sadece tek bir abstract'dan türeyebilir.

  interface :
  1. Soyut metodlar içerebilir.
  2. public görünürlüğüne sahip olmak kaydıyla normal metodlar içerebilir.
  3. Sabitler içerebilir.
  4. Herhangi bir sınıfda birden fazla interface(arayüz) kullanılabilir.
*/

/* ÖRNEK 1
  abstract class Deneme{
    abstract public function Tanim($parametre); // Hata kodu döndürür, çünkü soyut sınıftaki metodlar muhakkak soyut sınıfdan türeyen alt sınıflarda da bulunmalıdır.
  }
  class Test extends Deneme{
  public function Tanim($parametre){ // Tanim metodu alt sınıfa eklendiği için artık hata vermez.
  }
  }
-!*/

/* ÖRNEK 2
  abstract class Deneme{
    abstract public function Tanim($parametre); // Hata kodu döndürür, çünkü soyut sınıftaki metodlar muhakkak soyut sınıfdan türeyen alt sınıflarda da bulunmalıdır.
  }
  class TestBir extends Deneme{
  public function Tanim($parametre){ // Tanim metodu alt sınıfa eklendiği için artık hata vermez.
  }
  class TestIki extends Deneme{
  // Tanim metodu alt sınıfa eklenmediği için hata verir.

  }
-!*/

/* ÖRNEK 3
  abstract class Tema{
    abstract public function HeaderAlani($arkaPlanRengi, $headerLogosu, $headerBanneri);
    abstract public function BodyAlani($icerik);
    abstract public function FooterAlani($copyMetni);
  }

  class UstAlan extends Tema{
    public function HeaderAlani($arkaPlanRengi, $headerLogosu, $headerBanneri){

    }
    public function BodyAlani($icerik){

    }
    public function FooterAlani($copyMetni){

    }
  }
-!*/

/* ÖRNEK 4
abstract class Tema{
  abstract public function HeaderAlani($arkaPlanRengi, $headerLogosu, $headerBanneri);
  abstract public function BodyAlani($icerik);
  abstract public function FooterAlani($copyMetni);
}

class UstAlan extends Tema{ // Hata kodu döndürür; metotlar tanımlanmasına rağmen parametre değerleri eksik.
  public function HeaderAlani(){

  }
  public function BodyAlani(){

  }
  public function FooterAlani(){

  }
}
-!*/

/* ÖRNEK 5
abstract class Tema{
  abstract public function HeaderAlani($arkaPlanRengi, $headerLogosu, $headerBanneri);
  abstract public function BodyAlani($icerik);
  abstract public function FooterAlani($copyMetni);
}

class UstAlan extends Tema{ //Hata kodu döndürür; soyut sınıfı içerisinde bulunan BodyAlani metodu, soyut sınıfdan türeyen UstAlan sınıfı içerisinde kullanılmamıştır.
  public function HeaderAlani($arkaPlanRengi, $headerLogosu, $headerBanneri){

  }
  public function GovdeAlani($icerik){

  }
  public function FooterAlani($copyMetni){

  }
}
-!*/

/* ÖRNEK 5
  abstract class Deneme{
    public $isim = "Volkan";
    public const SOYISIM = "Alakent";
  }
  class Test extends Deneme{

  }
-!*/


/* ÖRNEK 6
abstract class Deneme{
  public $isimBir = "Volkan";
  public const SOYISIMBIR = "Alakent";

  private $isimIki = "Volkan";
  private const SOYISIMIKI = "Alakent";

  protected $isimUc = "Volkan";
  protected const SOYISIMUC = "Alakent";
}
class Test extends Deneme{

}
-!*/

/* ÖRNEK 1.1
interface Deneme{

  public function Tanim($parametre); // Hata kodu döndürür, çünkü soyut arayüz sınıfı içerisinde bulunan metodlar muhakkak soyut arayüz sınıfı tanımlanan sınıflarda da bulunmalıdır.

}
class Test implements Deneme{
  function Tanim($parametre){ // Tanim metodu eklendiği için hata üretmez.

  }
}
class TestIki implements Deneme{
  // HATA
  }
}
  -!*/

/* ÖRNEK 1.2

interface Islemler{ // CRUD : Create(C) - Read(R) - Update(U) - Delete(D)
  public function ekle($tablo, $id);
  public function oku($tablo, $id);
  public function guncelle($tablo, $id);
  public function sil($tablo, $id);
}

class Test implements Islemler{
  function ekle($tablo, $id){

  }
  function oku($tablo, $id){

  }
  function guncelle($tablo, $id){

  }
  function sil($tablo, $id){

  }
}
-!*/

/* ÖRNEK 1.3
interface Deneme{

 public const SOYISIMBIR = "Alakent";

}
class Test implements Deneme{

}
-!*/

/* ÖRNEK 1.4
interface Deneme{
 public const SOYISIMBIR = "Alakent";
 public $isim = "Alakent"; // Sadece sabit olarak tanımlanabilir ve public olmalıdır.
 private $isim = "Alakent";
 protected $isim = "Alakent";
}
class Test implements Deneme{

}
-!*/

/* ÖRNEK 1.5
interface Islemler{ // CRUD : Create(C) - Read(R) - Update(U) - Delete(D)
  private function ekle($tablo, $id); // Hata kodu döndürür; soyut arayüz sınıfı içerisinde private kullanılmaz.
  public function oku($tablo, $id);
  protected function guncelle($tablo, $id); // Hata kodu döndürür; soyut arayüz sınıfı içerisinde protected kullanılmaz.
  public function sil($tablo, $id);
}

class Test implements Islemler{
  function ekle($tablo, $id){

  }
  function oku($tablo, $id){

  }
  function guncelle($tablo, $id){

  }
  function sil($tablo, $id){

  }
}
-!*/

/* ÖRNEK 1.6
  interface Create{
    public function create($tablo, $id);
  }
  interface Read{
    public function read($tablo, $id);
  }
  interface Update{
    public function update($tablo, $id);
  }
  interface Delete{
    public function delete($tablo, $id);
  }
  class Test implements Create, Read, Update, Delete{
    function create($tablo, $id){

    }
    function read($tablo, $id){

    }
    function update($tablo, $id){

    }
    function delete($tablo, $id){

    }
  }
-!*/

/* ÖRNEK 1.7
interface CRUD{
  public function Olusturma($tabloDegeri, $benzersizKimlik);
  public function Okuma($tabloDegeri, $benzersizKimlik);
  public function Duzenleme($tabloDegeri, $benzersizKimlik);
  public function Silme($tabloDegeri, $benzersizKimlik);
}

abstract class Tema{
  abstract public function headerAlani($arkaPlanRengi, $headerLogosu, $headerBanneri);
  abstract public function bodyAlani($icerik);
  abstract public function footerAlani($copyMetni);
}

class UstAlan extends Tema implements CRUD{

  public function Olusturma($tabloDegeri, $benzersizKimlik){

  }
  public function Okuma($tabloDegeri, $benzersizKimlik){

  }
  public function Duzenleme($tabloDegeri, $benzersizKimlik){

  }
  public function Silme($tabloDegeri, $benzersizKimlik){

  }
  public function headerAlani($arkaPlanRengi, $headerLogosu, $headerBanneri){

  }
  public function bodyAlani($icerik){

  }
  public function footerAlani($copyMetni){

  }
}
-!*/
