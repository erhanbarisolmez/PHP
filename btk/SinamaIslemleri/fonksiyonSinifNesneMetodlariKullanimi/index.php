<?php

/*
  function_exists() : Belirtilecek olan fonksiyonun varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  class_exists()    : Belirtilecek olan class'ın(sınıfın) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  method_exists()   : Belirtilecek olan class(sınıf) içerisinde, belirtilecek olan metodun(fonksiyonun) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  property_exists() : Belirtilecek olan class(sınıf) içerisinde, belirtilecek olan özelliğin(değişkenin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  trait_exists()    : Belirtilecek olan class'a(sınıfa) ait, belirtilecek olan trait'in(özelliğin) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  interface_existrs(): Belirtilecek olan class'a(sınıf) ait, belirtilecek olan interface'in(arayüzün) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_subclass_of()  : Belirtilecek olan class'dan(sınıfdan) türeyen, belirtilecek olan sub class'ın(alt sınıfın/mirasın) varlığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_a()            : Belirtilecek olan class'ın(sınıfın) nesnesl örneğini sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
*/

/* ÖRNEK 1
  function Deneme(){

  }
  if (function_exists("Deneme")) {
    echo "Deneme adında fonksiyon bulunmaktadır.";
  }else {
    echo "Deneme adında fonksiyon #bulunmamaktadır.";
  }
!--*/

/* ÖRNEK 2
  if (function_exists("Deneme")) {
    echo "Deneme adında fonksiyon bulunmaktadır.";
  }else {
    echo "Deneme adında fonksiyon #bulunmamaktadır.";
  }
!--*/

/* ÖRNEK 2
  if (function_exists("Deneme")) {
    echo "Deneme adında fonksiyon bulunmaktadır.";
  }else {
    echo "Deneme adında fonksiyon #bulunmamaktadır.";
  }
!--*/

/* ÖRNEK 3
  if (class_exists("Deneme")) {
    echo "Deneme adında sınıf bulunmaktadır.";
  }else {
    echo "Deneme adında sınıf #bulunmamaktadır.";
  }
  !--*/

  /* ÖRNEK 4
    class Deneme{

  }
    if (class_exists("Deneme")) {
      echo "Deneme adında sınıf bulunmaktadır.";
    }else {
      echo "Deneme adında sınıf #bulunmamaktadır.";
    }
  !--*/

  /* ÖRNEK 5
    class Ornek{
      public function Deneme(){

      }
  }
  $islem = new Ornek;
    if (method_exists($islem,"Deneme")) {
      echo "Deneme adında metod bulunmaktadır.";
    }else {
      echo "Deneme adında metod #bulunmamaktadır.";
    }
 !--*/

 /* ÖRNEK 6
   class Ornek{
     public function qwe(){

     }
 }
 $islem = new Ornek;
   if (method_exists($islem,"Deneme")) {
     echo "Deneme adında metod bulunmaktadır.";
   }else {
     echo "Deneme adında metod #bulunmamaktadır.";
   }
!--*/

/* ÖRNEK 6
  class Ornek{
  public $isim = "Erhan Barış ÖLMEZ";
}
$islem = new Ornek;
  if (property_exists($islem,"isim")) {
    echo "isim adında özellik bulunmaktadır.";
  }else {
    echo "isim adında özellik #bulunmamaktadır.";
  }
!--*/

/* ÖRNEK 7
  class Ornek{
  public $isim = "Erhan Barış ÖLMEZ";
}
$islem = new Ornek;
  if (property_exists($islem,"test")) {
    echo "test adında özellik bulunmaktadır.";
  }else {
    echo "test adında özellik #bulunmamaktadır.";
  }
!--*/

/* ÖRNEK 7
  trait Ornek{

}
  if (trait_exists("Ornek")) {
    echo "Ornek adında trait bulunmaktadır.";
  }else {
    echo "Ornek adında trait #bulunmamaktadır.";
  }
!--*/

  /* ÖRNEK 7
    if (trait_exists("Ornek")) {
      echo "Ornek adında trait bulunmaktadır.";
    }else {
      echo "Ornek adında trait #bulunmamaktadır.";
    }
 !--*/

 /* ÖRNEK 7
 interface Ornek{

 }
   if (interface_exists("Ornek")) {
     echo "Ornek adında trait bulunmaktadır.";
   }else {
     echo "Ornek adında trait #bulunmamaktadır.";
   }
 !--*/

 /* ÖRNEK 8
   if (interface_exists("Ornek")) {
     echo "Ornek adında trait bulunmaktadır.";
   }else {
     echo "Ornek adında trait #bulunmamaktadır.";
   }
!--*/

/* ÖRNEK 9
  class AAA{

  }
  class BBB extends AAA{

  }
  $sinifBir = new AAA;
  $sinifIki = new BBB;
  if (is_subclass_of($sinifIki, "AAA")) {
    echo "BBB adındaki sınıf AAA adındaki sınıfın subclass(alt sınıfıdır)'ıdır.";
  }else {
      echo "BBB adındaki sınıf AAA adındaki sınıfın subclass'ı(alt sınıfı) değildir.";
  }
!--*/

/* ÖRNEK 9
  class AAA{

  }
  class BBB extends AAA{

  }
  if (is_subclass_of("AAA", "BBB")) {
    echo "AAA adındaki sınıf BBB adındaki sınıfın subclass(alt sınıfıdır)'ıdır.";
  }else {
      echo "AAA adındaki sınıf BBB adındaki sınıfın subclass'ı(alt sınıfı) değildir.";
  }
!--*/

/* ÖRNEK 10
  class AAA{

  }
  $sinif = new AAA;
  if (is_a($sinif, "AAA")) {
    echo '$sinif adındaki sınıf AAA adındaki sınıfın nesnel örneğidir.';
  }else {
      echo '$sinif adındaki sınıf AAA adındaki sınıfın nesnel örneği değildir.';
  }
!--*/

/* ÖRNEK 11
  class AAA{

  }
  class BBB{

  }
  $sinif = new BBB;
  if (is_a($sinif, "AAA")) {
    echo '$sinif adındaki sınıf AAA adındaki sınıfın nesnel örneğidir.';
  }else {
      echo '$sinif adındaki sınıf AAA adındaki sınıfın nesnel örneği değildir.';
  }
!--*/
