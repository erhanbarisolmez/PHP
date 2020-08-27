<?php
  $icerik = "Volkan Alakent";
  $desen = "/(?<Isim>Volkan) (?<SoyIsim>Alakent)/";
  preg_match($desen, $icerik , $sonuc);

  echo "Orjinal İçerik : " . $icerik . "<br>";
  echo "<pre>";
  print_r($sonuc);
  echo "<pre>";
 ?>
