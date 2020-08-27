<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="sonuc.php" method="post">
      Adınız Soyadınız : <input type="text" name="Isim"><br/>
      Hobileriniz :<br/>
      <input type="checkbox" name="Hobiler[]" value="Alışveriş"> Alışveriş <br/>
      <input type="checkbox" name="Hobiler[]" value="Seyehat"> Seyehat <br/>
      <input type="checkbox" name="Hobiler[]" value="Sinema"> Sinema <br/>
      <input type="checkbox" name="Hobiler[]" value="Tiyatro"> Tiyatro <br/>
      <input type="checkbox" name="Hobiler[]" value="Yemek"> Yemek <br/>
      <input type="submit" value="Formu Gönder">
    </form>
  </body>
</html>
