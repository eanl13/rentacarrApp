<?php

/**
 * Created by PhpStorm.
 * User: ea
 * Date: 02.02.2014
 * Time: 10:03
 */
header('Content-Type:text/html;charset=utf-8');

$mesaj ='Bugün derse neden geç kaldık?';

$tekrarSayisi = 10;

$sayac = 0;


while ( $sayac < $tekrarSayisi){
    echo $mesaj;
    echo '<br>';
    $sayac++;
}