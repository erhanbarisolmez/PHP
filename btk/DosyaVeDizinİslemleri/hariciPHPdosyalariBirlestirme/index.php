<?php

/*
include() : PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
  (Yeni dosyanın daha önceden eklenip eklenmediğini kontrol edilmez. Herhangi bir hata kodu dönecek olur ise
  kodlar okunmaya devam eder.)
include_once() : PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
  (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise
  kodlar okunmaya devam eder.)
require() : PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
  (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilmez. Herhangi bir hata kodu dönecek olur ise
  kodlar okunmaya devam edilmez.)
require_once() : PHP dosyasına, belirtilecek olan yeni bir PHP dosyasını dahil etmek / eklemek için kullanılır.
  (Yeni dosyanın daha önceden eklenip eklenmediği kontrol edilir. Herhangi bir hata kodu dönecek olur ise
  kodlar okunmaya devam edilmez.)
*/

/*
echo "1. satır.<br>";
include("dosya.php");
echo "<br>Son satır.<br>";
include("dosya.php");
*/
      /*
      echo "1. satır.<br>";
      include_once("dosya.php");
      echo "<br>Son satır.<br>";
      include_once("dosya.php");
      */
          /*
          echo "1. satır.<br>";
          require("dosya.php");
          echo "<br>Son satır.<br>";
          require("dosya.php");
          */
              /*
              echo "1. satır.<br>";
              require_once("dosya.php");
              echo "<br>Son satır.<br>";
              require_once("dosya.php");
              */
                    echo "1. satır.<br>";
                    include("deneme.php");
                    echo "<br>Son satır.<br>";
                    include("dosya.php");
                    echo "<br>";echo "<br>";echo "<br>";
                          echo "1. satır.<br>";
                          require("deneme.php");
                          echo "<br>Son satır.<br>";
                          require("dosya.php");
                      echo "<br>";echo "<br>";echo "<br>";
                            echo "1. satır.<br>";
                            require_once("deneme.php");
                            echo "<br>Son satır.<br>";
                            require_once("dosya.php");

       ?>
