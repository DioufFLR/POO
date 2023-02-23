<?php

require_once ('Human.php');

class Magasin extends Employe
{
    private $nameMag;
    private $adressMag;
    private $cdMag;
    private $cityMag;

    public function __construct($nameMag, $adressMag, $cdMag, $cityMag)
    {
        $this->nameMag = $nameMag;
        $this->adressMag = $adressMag;
        $this->cdMag = $cdMag;
        $this->cityMag = $cityMag;
    }
}