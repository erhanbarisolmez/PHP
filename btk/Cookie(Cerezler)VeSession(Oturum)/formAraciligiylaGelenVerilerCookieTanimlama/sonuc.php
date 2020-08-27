<?php

$gelenAdi = $_POST["ad"];
$gelenSoyad = $_POST["soyad"];
$yasamSuresi = time() + ((60*60) *24);

setcookie("KullaniciAdi", $gelenAdi, $yasamSuresi);
setcookie("KullaniciSadi", $gelenSoyad, $yasamSuresi);

 ?>
<a href="kim.php">Mesajı Göster</a>
