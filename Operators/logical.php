<?php
header('Content-Type:text/html;charset=utf-8');

/*
 * devamsızlık 90 saat üzerinden %70 den fazlaysa sertifika alamaz
 * not 70 ten az olursa sertifika alamaz
 * devam 90 saat üzerinden yüzde 70 i geçerse ve not 70 i geçerse sertifika alır
 * devam 90 saat üzerinden yüzde 70 i geçerse ve not 70 i geçemezse katılım belgesi alır
 */

$ogrenci1 = array (
    'ad'    => 'Ferdi',
    'soyad' => 'Tayfur',
    'not'   => rand(0,100),
    'devamsızlık' => rand(0,90)
);

$objogrenci1 = (object)$ogrenci1;

echo 'ögrencini adı - soyadı:   ' . $objogrenci1->ad . ' ' . $objogrenci1->soyad;
echo '<br>';
echo 'ögrencinin devamsızlıgı:  ' . $objogrenci1->devamsızlık . ' / 90';
echo '<br>';