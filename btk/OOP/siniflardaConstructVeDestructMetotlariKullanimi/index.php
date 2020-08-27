<?php

/*
  __construct() : Belirtilecek olan sınıfa, yapıcı metod tanımlamak için kullanılır.
  __destruct()  : Belirtilecek olan sınıfa, yıkıcı metod tanımlamak için kullanılır.
*/

  class Deneme{
    public function __construct(){
    echo "Sınıf çalıştı ve yapıcı metod devreye girdi.";
    }
    public function __destruct(){
    echo "Sınıf içerisindeki tüm özellik ve metodların çalışması tamamlandığı için
    yıkıcı metod devreye girdi.";
    }
    public $isim = "Barış";
    public $soyIsim = "ÖLMEZ";

    public function yaz(){
      $metin = "PHP Eğitim Seti";
      return $metin;
    }
  }
  $islemYap = new Deneme();
  echo "<br>".$islemYap -> isim . " " . $islemYap -> soyIsim . " <br> ". $islemYap -> yaz() . "<br>";




















 ?>
