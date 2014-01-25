<?php

// diziyi birleştirerek bir string döndürür

$meyveler = array('elma', 'portakal', 'kivi');

$cumle = implode(', ', $meyveler);

echo 'bu cümlede toplam'. count($cumle). 'veritabanında vardır';
echo "$cumle";
