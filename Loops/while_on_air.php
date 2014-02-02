<?php
/*
 * bu uygulamada sayfaya 0-20 arasında rastgele div html blokları yazdırılacaktır.
 * kutucukların arkaplan renkleri rastgele belirlenecektir.
 * kutuckların genişlik ve yükseklik değerleri 30px olacaktır.
 * kutucukların ardarda sıralanması için float css özellikleri verilecektir.
 *
 */
header('Content-Type:text/html;charset=utf-8');
$rastgeleKutucukSayisi = rand(1,20);

//oluşturulacak olan her bir kutucuğun ortak olarak sahip olacağı css özelliklerini saklayacak
$styleSabit = 'width: 30px; height: 30px; float: left;';

//her döngüde yeniden oluşturulacak olan kutuyu css özelliklerini saklayacak.
$style = null;

//kutu oluşturma işleminin kaç kez gerçekleştirildiği saklayacak olan sayaç değişkeni
$sayac=0;


//sayac değişkeni
while( $sayac < $rastgeleKutucukSayisi) {

$rastgeleRenk1 = rand(0,255);
$rastgeleRenk2 = rand(0,255);
$rastgeleRenk3 = rand(0,255);

$style = $styleSabit . "background-color: rgb( $rastgeleRenk1, $rastgeleRenk2, $rastgeleRenk3);";

echo "<div style='$style'>Kutu</div>";
$sayac++;
}