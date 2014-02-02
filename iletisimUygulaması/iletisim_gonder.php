<?php

include_once 'lib/EmailHandler.php';

$ad     = isset( $_POST['txtAd']) ? $_POST['txtAd'] : null;
$soyad  = isset( $_POST['txtSoyad']) ? $_POST['txtSoyad'] : null;
$email  = isset( $_POST['txtEmail']) ? $_POST['txtEmail'] : null;
$konu   = isset( $_POST['txtKonu']) ? $_POST['txtKonu'] : null;
$mesaj  = isset( $_POST['txtMesaj']) ? $_POST['txtMesaj'] : null;


$EmailHandler1 = new EmailHandler($ad, $soyad, $email, $konu, $mesaj);

$sonuc = $EmailHandler1->mailGonder();

if( $sonuc == true){
    echo 'Mesajınız iletilmiştir teşekkür ederiz';
}else{
    echo 'Mesaj gönderiminde bir hata oluştu.';
}



