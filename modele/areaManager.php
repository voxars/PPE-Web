<?php

require_once("modele/Manager.php");
require_once("modele/Area.php");

class AreaManager extends Manager
{
    public function get($id) //instancie un objet
    {
        $nSalle = (int) $id;
        $q = $this->getPDO()->query('SELECT id, area_name FROM mrbs_area WHERE nSalle = '.$nSalle);
        $donnees = $q->fetch(PDO::FETCH_ASSOC);
        return new Area($donnees['id'], $donnees['area_name']);
    }

    public function getList()//instancie une collection d'objet Area
    {
        $area = [];
        $q = $this->getPDO()->query('SELECT id, area_name FROM mrbs_area ORDER BY id');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $area[$donnees['id']] = new Area($donnees['id'], $donnees['area_name']);
        }
        return $area;

    }
}
?>