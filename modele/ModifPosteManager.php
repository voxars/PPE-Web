<?php

require_once("modele/Manager.php");
require_once("modele/ModifPoste.php");


class ModifPosteManager extends Manager
{
    public function listePoste(){
        $postes = [];
        $q = $this->getPDO()->query('SELECT `nPoste`,`nomPoste`,`indIP`,`ad`,`typePoste`,`nSalle`, `nbLog` FROM `poste`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $postes[$donnees['nomPoste']] = new ModifPoste($donnees['nPoste'], $donnees['nomPoste'], $donnees['indIP'], $donnees['ad'], $donnees['typePoste'], $donnees['nSalle'], $donnees ['nbLog']);
        }
        return $postes;
    }

    public function modifPoste($nPoste, $nomPoste,$ip, $ad,$type, $nsalle, $nbLog){
        $req = $this->getPDO()->prepare('UPDATE poste SET nPoste=?,indIP=?,ad=?,typePoste=?,nSalle=?,nbLog=? WHERE nomPoste=?');
        $req->execute(array(
            $nPoste,
            $ip,
            $ad,
            $type,
            $nsalle,
            $nbLog,
            $nomPoste
        ));
    }
}