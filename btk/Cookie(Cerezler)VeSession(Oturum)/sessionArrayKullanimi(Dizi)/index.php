<?php
session_start();
 ?>
<?php

$_SESSION["USER"] = array(
  "Ad" => "JAMES",
  "Sad" => "BOSCHERT",
  "Meslek" => "Yazar",
  "Mail" => "jamesbosc@yahoo.com",
  "Tel" => "+2554 4847"
);

echo "<pre>";
print_r($_SESSION);
echo "</pre>";


 ?>
