<?php
/*
  var : Herhangi bir sınıf içerisinde standart değişken tanımlamak için kullanılır.

*/
  class Deneme{
    var $isim = "Barış";
    const SOYISIM = "ÖLMEZ"; // var ifadesi sabitlerde kullanılmaz!
  }
  $islem = new Deneme;

  echo $islem -> isim;
    echo DENEME :: SOYISIM;
 ?>
