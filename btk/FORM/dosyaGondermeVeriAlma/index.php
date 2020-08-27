<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      /*
      move_upload_file()  : Herhangi bir dosyayı belirtelecek olan dizine yükleme.
      post olmalı
      enctype="multipart/form-data" formdan dosya yüklemesi için zorunlu
      */
     ?>
     <form  action="sonuc.php" method="post" enctype="multipart/form-data">

       Yükleyeceğiniz dosyayı seçin : <input type="file" name="Dosya">
       <input type="submit" value="YÜKLE">
     </form>
  </body>
</html>
