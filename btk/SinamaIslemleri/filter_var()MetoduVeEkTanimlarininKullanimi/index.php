<?php
  /*
    filter_var() : Kendisine parametre olarak verilen değer doğrultusunda içeriği filtreleyerek, içeriğin filtrelemeye
    uygun olup olmadığını sınamak için kullanılır. İşlem sonucu daime boolean(mantıksal) veri türünde döner.

FILTER_VALIDATE_BOOLEAN       : Belirtilecek olan içeriğin boolean(mantıksal) veri türünde olup olmadığını sınamak için kullanılır.
İşlem sonucu daime boolean(mantıksal) veri türünde döner.
  True değerleri : true(1,on,yes) false(0,of,no)

FILTER_VALIDATE_INT           : Belirtilecek olan içeriğin integer(tamsayı) veri türünde olup olmadığını sınamak için kullanılır.
  İşlem sonucu daime boolean(mantıksal) veri türünde döner.

FILTER_VALIDATE_IP            : Belirtilecek olan içeriğin IP adresi türünde olup olmadığını sınamak için kullanılır.
İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_IPV4            : Belirtilecek olan IP adresinin türünde olup IPV4 uyumlu olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_IPV6            : Belirtilecek olan IP adresinin türünde olup IPV6 uyumlu olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.

FILTER_VALIDATE_EMAIL         : Belirtilecek olan içeriğin E-Mail adresi türünde olup olmadığını sınamak için kullanılır.
  İşlem sonucu daime boolean(mantıksal) veri türünde döner.   İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.

FILTER_VALIDATE_URL           : Belirtilecek olan içeriğin URL(Uniform Resource Locator - nizami kaynak bulucu) adresi türünde olup olmadığını sınamak için kullanılır.
İşlem sonucu daime boolean(mantıksal) veri türünde döner.  İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_SCHEME_REQUIRED : Belirtilecek olan URL(Uniform Resource Locator) adresinin RFC(Request for Comment - yorum talebi) uyumlu olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_HOST_REQUIRED   : Belirtilecek olan URL(Uniform Resource Locator) adresinde host(barındırma) adının olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_PATH_REQUIRED   : Belirtilecek olan URL(Uniform Resource Locator) adresinin path(yol) değerinin olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.
  FILTER_FLAG_QUERY_REQUIRED  : Belirtilecek olan URL(Uniform Resource Locator) adresinin query(sorgu) değerinin olup olmadığını sınamak için kullanılır.
    İşlem sonucu başarılı olursa değeri geriye döndürür. Başarısız olur ise herhangi bir değer döndürmez.

  */

/*ÖRNEK 1
  $deger = "Erhan Barış ÖLMEZ";
  if (filter_var($deger, FILTER_VALIDATE_BOOLEAN)) {
    echo "Sınanan içerik boolean veri türündedir.";
  }else {
    echo "Sınanan içerik boolean veri türünde değildir.";
  }
!-*/

/*ÖRNEK 2
  $deger = 2;
  if (filter_var($deger, FILTER_VALIDATE_INT)) {
    echo "Sınanan içerik integer veri türündedir.";
  }else {
    echo "Sınanan içerik integer veri türünde değildir.";
  }
!-*/

/*ÖRNEK 3
  $deger = "212.133.221.38";
  if (filter_var($deger, FILTER_VALIDATE_IP)) {
    echo "Sınanan içerik IP adresidir.";
  }else {
    echo "Sınanan içerik  IP adresi değildir.";
  }
  !-*/

/*ÖRNEK 4
    $deger = "212.133.221.38";
    if (filter_var($deger, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
      echo "Sınanan içerik IPV6 adresidir.";
    }else {
      echo "Sınanan içerik  IPV6 adresi değildir.";
    }
!-*/

/*ÖRNEK 5
    $deger = "2001:db8:85A3:8d3:1319:8a2e:7348:370";
    if (filter_var($deger, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
      echo "Sınanan içerik IPV4 adresidir.";
    }else {
      echo "Sınanan içerik  IPV4 adresi değildir.";
    }
  !-*/

/*ÖRNEK 6
      $deger = "info@gmail.com";
      if (filter_var($deger, FILTER_VALIDATE_EMAIL)) {
        echo "Sınanan içerik E-Mail adresidir.";
      }else {
        echo "Sınanan içerik E-Mail adresi değildir.";
      }
!-*/

/*ÖRNEK 7
      $deger = "info.com";
      if (filter_var($deger, FILTER_VALIDATE_URL)) {
        echo "Sınanan içerik URL adresidir.";
      }else {
        echo "Sınanan içerik URL adresi değildir.";
      }
!-*/

/*ÖRNEK 8
      $deger = "https://info.com";
      if (filter_var($deger, FILTER_VALIDATE_URL)) {
        echo "Sınanan içerik URL adresidir.";
      }else {
        echo "Sınanan içerik URL adresi değildir.";
      }
!-*/

/*ÖRNEK 9
      $deger = "https://i";
      if (filter_var($deger, FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED)) {
        echo "Sınanan içerik URL adresidir.";
      }else {
        echo "Sınanan içerik URL adresi değildir.";
      }
!-*/

/*ÖRNEK 10
      $deger = "https://qwe";
      if (filter_var($deger, FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED)) {
        echo "Sınanan içerik URL adresidir.";
      }else {
        echo "Sınanan içerik URL adresi değildir.";
      }
 !-*/

 /*ÖRNEK 11
       $deger = "https://www.qwe.com/s";
       if (filter_var($deger, FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED)) {
         echo "Sınanan içerik URL adresidir.";
       }else {
         echo "Sınanan içerik URL adresi değildir.";
       }
 !-*/

/*ÖRNEK 12 !-*/
       $deger = "https://www.qwe.com?Renk=mavi";
       if (filter_var($deger, FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED)) {
         echo "Sınanan içerik URL adresidir.";
       }else {
         echo "Sınanan içerik URL adresi değildir.";
       }
