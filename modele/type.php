<?php


class type
{
    private $typeLP;
    private $nomType;
    private $tarif;


    public function __construct($typeLP, $nomType, $tarif)
    {
        $this->typeLP = $typeLP;
        $this->nomType = $nomType;
        $this->tarif = $tarif;
    }

    /**
     * @return mixed
     */
    public function getTypeLP()
    {
        return $this->typeLP;
    }

    /**
     * @return mixed
     */
    public function getNomType()
    {
        return $this->nomType;
    }

    /**
     * @return mixed
     */
    public function getTarif()
    {
        return $this->tarif;
    }

    /**
     * @param mixed $typeLP
     */
    public function setTypeLP($typeLP): void
    {
        $this->typeLP = $typeLP;
    }

    /**
     * @param mixed $nomType
     */
    public function setNomType($nomType): void
    {
        $this->nomType = $nomType;
    }

    /**
     * @param mixed $tarif
     */
    public function setTarif($tarif): void
    {
        $this->tarif = $tarif;
    }




}