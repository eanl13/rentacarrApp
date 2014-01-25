<?php

$musteri1 = array(
    'ad'    => 'emre',
    'soyad' => 'agdas',
    'email' => 'eanl13@gmail.com',
    'adres' => array(
        'ev' => 'Beşiktaş',
        'is' => 'maltepe',  
    ),
    'banka' =>array(
        array(
            'banka adi' => 'aktifbank',
            'sube kodu' => '8461',
            'hesap no'  => '988996553179',
            'ek bilgi'  => 'life is good',
        ),
        array(
            'banka adi' => 'bankaktif',
            'sube kodu' => '8461',
            'hesap no'  => '988996553179',
            'ek bilgi'  => 'life is good',
        )
    )
);

//müşteriyi yazdır
echo $musteri1['ad'] . '<br>';

//müsteri fatura adres
echo $musteri1['adres']['is'] . '<br>';

//2nci banka hesap numarası
echo $musteri1['banka'][1]['hesap no'];










