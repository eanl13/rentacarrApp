<?php


class EmailHandler {
    
    public $ad;
    public $soyad;
    public $email;
    public $konu;
    public $mesaj;
    public $protokol = 'SMTP';
    public $hatalar = array();
    
    public function __construct($ad, $soyad, $email, $konu, $mesaj){
        $this->ad    = $ad;
        $this->soyad = $soyad;
        $this->email = $email;
        $this->konu  = $konu;
        $this->mesaj = $mesaj;  
    }          
}
