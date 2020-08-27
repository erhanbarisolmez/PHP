<?php

/*ÖRNEK 1
 class Bicimlendir{
   public $yazi;
   public $stil;


   public function metin($metinDegeri){
     $this -> yazi = $metinDegeri;
     return $this;
   }

   public function renk($renkDegeri){
   $this -> stil = "color:" . $renkDegeri . ";";
    return $this;
   }

   public function boyut($boyutDegeri){
   $this -> stil .= "font-size:" .$boyutDegeri . "; ";
    return $this;
   }

   public function olustur(){
    return "<div style='" . $this -> stil . "'>" . $this -> yazi ."</div>";
   }
 }

 $sonuc = new Bicimlendir;
 echo $sonuc -> metin("Erhan Barış ÖLMEZ")-> renk("red")->  boyut("30px")-> olustur();
 echo $sonuc -> metin("A'dan Z'ye PHP Eğitim Seti")-> renk("purple")->  boyut("20px")-> olustur();
-!*/
  class Hesap{
    private $sonuc = 0;

    function __construct($sayiDegeri){
      $this -> sonuc = $sayiDegeri;
    }
    public function toplama($sayiDegeri){
      $this -> sonuc += $sayiDegeri;
      return $this;
    }
    public function cikarma($sayiDegeri){
      $this -> sonuc -= $sayiDegeri;
      return $this;
    }
    public function bolme($sayiDegeri){
      $this -> sonuc /= $sayiDegeri;
      return $this;
    }
    public function carpma($sayiDegeri){
      $this -> sonuc *= $sayiDegeri;
      return $this;
    }
    public function goster(){
      echo $this -> sonuc . "<br/>";
      return $this;
    }
  }
  $islem = new Hesap(1000);
  $islem -> toplama(500) -> cikarma(300) -> carpma(2) -> bolme(8)->goster();
  $islemIki = new Hesap(10);
  $islemIki -> toplama(50) -> cikarma(5) -> carpma(2) -> bolme(8)->goster();
