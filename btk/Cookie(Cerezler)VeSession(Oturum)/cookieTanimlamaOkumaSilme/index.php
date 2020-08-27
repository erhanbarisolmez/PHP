<?php
/*

setcookie() : Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kulllanılır.
Parametreler : 1. Parametre : Çerez Adı, 2. Parametre : Çerez Değeri, 3. Parametre : Çerez Yaşam Süreci


*/


$YasamSuresi = time() + 3600;
setcookie("KullaniciOnAdi", "Erhan", $YasamSuresi);
setcookie("KullaniciAdi", "Barış", $YasamSuresi);
setcookie("KullaniciSoyadi", "ÖLMEZ", $YasamSuresi);


if (isset($_COOKIE["KullaniciOnAdi"])) {
echo "Kullanıcı Önadı : " . $_COOKIE["KullaniciOnAdi"] . "<br>";
}
if (isset($_COOKIE["KullaniciOnAdi"])) {
  echo "Kullanıcı Adı : " . $_COOKIE["KullaniciAdi"] . "<br>";
}
if (isset($_COOKIE["KullaniciSoyadi"])) {
  echo "Kullanıcı Soyadı : " . $_COOKIE["KullaniciSoyadi"] . "<br>";
}
/*
echo "<pre>";
print_r($_COOKIE);
echo "<pre>";
echo "<br>SOYADI : " . $_COOKIE["KullaniciSoyadi"];
*/

//SİLME
setcookie("KullaniciOnAdi", "", 0);
setcookie("KullaniciAdi", "", 0);
setcookie("KullaniciSoyadi", "", 0);
?>
