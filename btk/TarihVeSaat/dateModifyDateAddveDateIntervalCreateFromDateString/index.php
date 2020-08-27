<?php
/*
date_modify() : Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.

date_add()    : Oluşturulmuş olan yeni bir tarih nesnesine, belirtilecek olan tarih değerini eklemek için kullanılır.

date_interval_create_from_date_string() : date_add() metodu ile tarih değeri ekleme işlemlerinde, eklenecek olan değeri
tanımlayabilmek için kullanılır.
*/

/*
$zaman = date_create("1996-04-10");// Yıl - Ay - Gün
echo "<pre>";
print_r($zaman);
echo "<pre/>";

date_modify($zaman, "+3 year");
date_modify($zaman, "+3 month");
date_modify($zaman, "+3 day");
date_modify($zaman, "+3 hour");
date_modify($zaman, "+3 minute");
echo "<pre>";
print_r($zaman);
echo "<pre/>";
*/
$zaman = date_create("1996-04-10");// Yıl - Ay - Gün
echo "<pre>";
print_r($zaman);
echo "<pre/>";

date_add($zaman, date_interval_create_from_date_string("+3 year"));

echo "<pre>";
print_r($zaman);
echo "<pre/>";

 ?>
