<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (!$_GET) {
     ?>

    <form action="index.php" method="get">
      Adınız Soyadınız : <input type="text" name="adSoyad"><br>
      Telefon Numarası : <input type="text" name="telNo"><br>
      E-Mail Adresiniz : <input type="text" name="eMail"><br>
      Mesajınız        : <textarea name="mesaj"></textarea><br>
      <input type="submit" value="Gönder">
    </form>
      <?php
      }else {
            $gelenAdSoyad = $_GET["adSoyad"];
            $gelenTelefon = $_GET["telNo"];
            $gelenEmail = $_GET["eMail"];
            $gelenMesaj = $_GET["mesaj"];

            echo "Adınız Soyadınız : " . $gelenAdSoyad . "<br>";
            echo "Telefon Numaranız : " . $gelenTelefon . "<br>";
            echo "E-Mail Adresiniz : " . $gelenEmail . "<br>";
            echo "Mesajınız        : " . $gelenMesaj . "<br>";
      }
       ?>
  </body>
</html>
