<?php
/*
  spl_autoload_register() : Doküman içerisinde belirtilecek olan sınıfın bulunması durumunda, belirtilecek olan
  parametreye göre bir sınıf dokümanı otomatik olarak belgeye dahil / yüklemek için kullanılır.
*/

  spl_autoload_register(function ($deger){
      $dosyaAdi = 'class/'.$deger . '.php';
      require_once($dosyaAdi);
    });
    
  $kim = new Uyeler;
  echo $kim -> bilgiler()." <br/>";

  $kutuphane = new Kutuphaneler;
  echo $kutuphane -> deger ." <br/>";

  $kontroller = new Kontroller;
  echo $kontroller -> deger . "<br/>";

  $modeller = new Modeller;
  echo $modeller -> deger . "<br/>";
