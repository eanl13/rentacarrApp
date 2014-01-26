<?php
header('Content-Type:text/html;charset=utf-8');

$departman = isset( $_POST['dropdownDepertman']) ? $_POST['dropdownDepertman']: null;

if ( !is_null($departman) ){
    switch ($departman){
        case 1:
            echo 'emailiniz pazarlama@sirket.com adresine gönderildi';
        break;
    
        case 2:
            echo 'emailiniz satış@sirket.com adresine gönderildi.';
        break;
    
        case 3:
            echo 'emailiniz Finans@sirket.com adresine gönderildi.';
        break;
    
        default:
            echo 'sectiğiniz departman yok.';
        break;
            
    }
}

