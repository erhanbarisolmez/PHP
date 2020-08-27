<?php
session_start();
 ?>
<?php

echo "<pre>";
print_r($_SESSION);
echo "</pre><br>";
echo "Şehir : ". $_SESSION["KullaniciSehir"];

 ?>
 <?php echo "<br>"; ?>
<a href="sil.php">SESSION SİL</a>
