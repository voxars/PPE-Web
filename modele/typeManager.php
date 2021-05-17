<?php

require_once("modele/Manager.php");
require_once("modele/type.php");

class typeManager extends Manager
{
    public function getList()
    {
        $salles = [];
        $q = $this->getPDO()->query('SELECT typeLP, nomType, tarif FROM types');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $salles[$donnees['typeLP']] = new type($donnees['typeLP'], $donnees['nomType'], $donnees['tarif']);
        }
        return $salles;
    }
}