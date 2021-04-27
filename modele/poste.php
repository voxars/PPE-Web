<?php

class Poste
{
    private $nPoste;
    private $nSalle;

    public function __construct($unNPoste, $unNSalle)
    {
        $this->nPoste = $unNPoste;
        $this->nSalle = $unNSalle;
    }

    public function GetNPoste()
    {
        return $this->nPoste;
    }

    public function GetNSalle()
    {
        return $this->nSalle;
    }
}
?>_