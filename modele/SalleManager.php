<?php

require_once("modele/Manager.php");
require_once("modele/Salle.php");

class SalleManager extends Manager
{
    function getPleinDeTrucs()
    {
        $q = $this->getPDO()->query('SELECT s.nSalle, s.nomSalle, s.nbPoste, s.indIP, r.disabled, r.area_id, r.room_name, r.sort_key, r.description, r.capacity FROM salle s INNER JOIN mrbs_room r ON s.id = r.id');

        $donnees = $q->fetch(PDO::FETCH_ASSOC);

        return new Salle($donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['disabled'], $donnees['area_id'], $donnees['room_name'], $donnees['sort_key'], $donnees['description'], $donnees['capacity']);
    }
    
    public function getList()
    {
        $salles = [];
        $q = $this->getPDO()->query('SELECT s.nSalle, s.nomSalle, s.nbPoste, s.indIP, r.disabled, r.area_id, r.room_name, r.sort_key, r.description, r.capacity FROM salle s INNER JOIN mrbs_room r ON s.id = r.id');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $salles[$donnees['nSalle']] = new Salle($donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['disabled'], $donnees['area_id'], $donnees['room_name'], $donnees['description'], $donnees['capacity']);
        }
        return $salles;
    }

    public function getListSalle($salle)
    {
        $salles = [];
        $q = $this->getPDO()->query('SELECT s.nSalle, s.nomSalle, s.nbPoste, s.indIP, r.disabled, r.area_id, r.room_name, r.sort_key, r.description, r.capacity FROM salle s INNER JOIN mrbs_room r ON s.id = r.id WHERE s.nsalle = $salle');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $salles[$donnees['nSalle']] = new Salle($donnees['nSalle'], $donnees['nomSalle'], $donnees['nbPoste'], $donnees['indIP'], $donnees['disabled'], $donnees['area_id'], $donnees['room_name'], $donnees['description'], $donnees['capacity']);
        }
        return $salles;
    }


}