<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <!--
               SUPER_GLOBALS
      GET     : Veriyi adres çubuğundan alır.
      POST    : Veriyi gizleyerek alır.
      REQUEST : Verinin nasıl alındığı hatırlanmıyorsa her iki durum için de kullanılır.
         -->
      <form action="sonuc.php" method="post">
          Adınız Soyadınız : <input type="text" name="AdSoyad"><br/>
          E-Mail Adresiniz : <input type="email" name="EmailAdres"><br/>
          Telefonuz        : <input type="text" name="Telefon"><br/>
          Cinsiyetiniz     : <input type="radio" name="Cinsiyet" value="Erkek">Erkek
          <input type="radio" name="Cinsiyet" value="Kadın">Kadın<br/>
          Yaşınız          :<select name="Yas">
            <option value="30">30</option>
            <option value="29">29</option>
            <option value="28">28</option>
            <option value="27">27</option>
            <option value="26">26</option>
            <option value="25">25</option>
            <option value="24">24</option>
            <option value="23">23</option>
            <option value="22">22</option>
            <option value="21">21</option>
          </select><br/>
          <input type="submit" value="GÖNDER">
      </form>
  </body>
</html>
