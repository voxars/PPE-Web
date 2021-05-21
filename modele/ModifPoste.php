<?php

class ModifPoste
{
    private $nPoste;
    private $nomPoste;
    private $indIP;
    private $ad;
    private $typePoste;
    private $nSalle;

    public function __construct($nPoste, $nomPoste, $indIP, $ad, $typePoste, $nSalle)
    {
        $this->nPoste = $nPoste;
        $this->nomPoste = $nomPoste;
        $this->indIP = $indIP;
        $this->ad = $ad;
        $this->typePoste = $typePoste;
        $this->nSalle = $nSalle;
    }
    
    public function getNPoste()
    {
        return $this->nPoste ;
    }

    public function getNomPoste()
    {
        return $this->nomPoste ;
    }

    public function getIndIp()
    {
        return $this->indIp ;
    }

    public function getAd()
    {
        return $this->ad;
    }

    public function getTypePoste()
    {
        return $this->typePoste ;
    }

    public function getNSalle()
    {
        return $this->nSalle ;
    }

    public function setNPoste($nPoste): void 
    {
        $this->nPoste = $nPoste;
    }

    public function setNomPoste($nomPoste): void 
    {
        $this->nomPoste = $nomPoste;
    }

    public function setIndIp($indIP): void 
    {
        $this->indIp = $indIP;
    }

    public function setAd($ad): void 
    {
        $this->ad = $ad;
    }

    public function setTypePoste($typePoste): void 
    {
        $this->typePoste = $typePoste;
    }

    public function setNSalle($nSalle): void 
    {
        $this->nSalle = $nSalle;
    }

}