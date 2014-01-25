<?php

$ad = 'emre';

$notlar = array(
    35,
    70,
    90
);


// var_dump değişkenin veri tipini ve değerini yazdırır.
//var_dump($notlar);
//echo'<br>';
//print_r($notlar);

//0. indexteki veriyi yazdırır.
echo $notlar[0];

echo '<br>';

//count fonksiyonu verilen dizinin eleman sayısını döndürür.
echo count ($notlar);
echo '<br>';



$notlar[6] = 58;
var_dump($notlar);
echo '<br>';

$notlar[] =64;
var_dump($notlar);
echo'<br>';

$notlar['kannat'] = 98;
var_dump($notlar);











