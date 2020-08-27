<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="sonuc.php" method="post">
      Kullanıcı Adı: <br/>
      <input type="text" name="ad"><br/>
      Kullanıcı Şifre: <br/>
      <input type="password" name="sifre">
      <input type="submit" value="GİRİŞ YAP">
    </form>
  </body>
</html>
