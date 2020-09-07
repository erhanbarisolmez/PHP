<?php

/*
  extension_loaded()  : Belirtilecek olan PHP eklentisinin yüklü olup olmadığını sınamak için kullanılır. İşlem sonucu boolean(mantıksal) veri türünde döner.
*/

//phpinfo(INFO_MODULES);

  $eklentiAdi = "ffmpeg";
  if (extension_loaded($eklentiAdi)) {
    echo "Kontrol etmiş olduğunuz <b>".$eklentiAdi."</b> eklentisi sistemde yüklüdür.";
  }else {
  echo "Kontrol etmiş olduğunuz <b>".$eklentiAdi."</b> eklentisi sistemde yüklü değildir..";
  }
