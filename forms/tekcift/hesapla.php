<?php

$sayi = isset( $_GET['txySayi']) ? $_GET['txtSayi'] : null;

// sayının modu alınıyor. Eğer girilmişse

if(is_null($sayi) ){
    $mod = $sayi % 2;
} else {
    if(is_null($sayi) ){
        echo 'bir sayi girmediniz';
    } elseif( $mod ==1){
        echo 'sayiyiniz tek';
    }else{
        echo 'sayiniz çift';
    }
}

