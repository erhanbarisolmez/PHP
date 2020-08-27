<?php
  session_start(); //En başa yazılmalı
 ?>
<?php
/*
  session_start()   : session (oturum) başlatmak veya session'ları (oturum) takip etmek için kullanılır. Sunucu temp dosyasına depolanır
  session_destroy() : Daha önce oluşturulmuş olan session'ları (oturumlar) silmek için kullanılır.
*/

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <?php
  $_SESSION["KullaniciAdi"] = "İskender";
  $_SESSION["KullaniciSAdi"] ="Pala";
  $_SESSION["KullaniciMail"] = "pala@gmail.com";
  $_SESSION["KullaniciAdres"]= " Kapı Yayın Evi";
  $_SESSION["KullaniciSehir"] = "İstanbul";
 ?>
 <a href="oku.php">SESSION OKU</a>
  </body>
</html>
