<?php

/*
  is_string()  : Belirtilecek olan değişken içeriğinin string(alfanumerik) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_int()     : Belirtilecek olan değişken içeriğinin integer(tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_integer() : Belirtilecek olan değişken içeriğinin integer(tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_long()    : Belirtilecek olan değişken içeriğinin integer(tamsayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_double()  : Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_float()   : Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_real()    : Belirtilecek olan değişken içeriğinin double / float (ondalıklı sayı) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_numeric() : Belirtilecek olan değişken içeriğinin numeric(sayısal) veri türlerinden(int, float, double) biri olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_bool()    : Belirtilecek olan değişken içeriğinin boolean(mantıksal) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_null()    : Belirtilecek olan değişken içeriğinin null(boş / değeri olmayan) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_resource(): Belirtilecek olan değişken içeriğinin resource(kaynak) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_callable(): Belirtilecek olan değişken içeriğinin callable(geri çağırımlar / geri çağırabilenler) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_array()   : Belirtilecek olan değişken içeriğinin array(dizi) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
  is_object()  : Belirtilecek olan değişken içeriğinin object(nesne) veri türünde olup olmadığını sınamak için kullanılır. İşlem sonucu daima boolean(mantıksal) veri türünde döner.
*/

/* ÖRNEK 1
  $deger = "Erhan Barış ÖLMEZ";

  if (is_string($deger)) {
    echo "Değer string içeriktir.";
  }else {
    echo "Değer string içerikt değildir.";
  }
!--*/

/* ÖRNEK 2
  $deger = 23123;

  if (is_string($deger)) {
    echo "Değer string içeriktir.";
  }else {
    echo "Değer string içerik değildir.";
  }
!--*/

/* ÖRNEK 3
  $deger = 23123;

  if (is_int($deger)) {
    echo "Değer integer içeriktir.";
  }else {
    echo "Değer integer içerik değildir.";
  }
  !--*/

  /* ÖRNEK 4
    $deger = "123";

    if (is_int($deger)) {
      echo "Değer integer içeriktir.";
    }else {
      echo "Değer integer içerik değildir.";
    }
  !--*/

  /* ÖRNEK 5
    $deger = "123";

    if (is_integer($deger)) {
      echo "Değer integer içeriktir.";
    }else {
      echo "Değer integer içerik değildir.";
    }
  !--*/

  /* ÖRNEK 6
    $deger = "123.3";

    if (is_long($deger)) {
      echo "Değer integer içeriktir.";
    }else {
      echo "Değer integer içerik değildir.";
    }
  !--*/
