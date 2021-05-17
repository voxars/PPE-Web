<?php

require_once("modele/Manager.php");
require_once("modele/data.php");

class dataManager extends Manager
{
    public function getDataSalle() //instancie un objet
    {
        $data = [];
        $q = $this->getPDO()->query('nSalle FROM salle');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $data[$donnees['id']] = new data($donnees['name']);
        }
        return $data;
    }

    public function getDataIp() //instancie un objet
    {
        $data0 = [];
        $q = $this->getPDO()->query('SELECT indIP FROM salle');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $data0[$donnees['id']] = new data($donnees['name']);
        }
        return $data0;
    }


}
?>