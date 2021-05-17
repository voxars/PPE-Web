<?php

require_once("modele/Manager.php");
require_once("modele/ip.php");

class ipManager extends Manager
{
    public function getIp(){
        $ip = [];
        $q = $this->getPDO()->query('SELECT indIP,etage FROM segment');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $ip[$donnees['indIP']] = new ip($donnees['indIP'],$donnees['etage']);
        }
        return $ip;


    }
}