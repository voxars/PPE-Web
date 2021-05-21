<?php

require_once("modele/Manager.php");
require_once("modele/ModifPoste.php");


class ModifPosteManager extends Manager
{
    public function listePoste(){
        $postes = [];
        $q = $this->getPDO()->query('SELECT `nPoste`,`nomPoste`,`indIP`,`ad`,`typePoste`,`nSalle` FROM `poste`');
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            $postes[$donnees['nomPoste']] = new ModifPoste($donnees['nPoste'], $donnees['nomPoste'], $donnees['indIP'], $donnees['ad'], $donnees['typePoste'], $donnees['nSalle']);
        }
        return $postes;
    }

    public function modifPoste($nPoste, $nomPoste,$ip, $ad,$type, $nsalle){
        $req = $this->getPDO()->prepare('UPDATE `poste` SET `nPoste`=":nPoste",`indIP`=":indIP",`ad`=:ad,`typePoste`=":typePoste",`nSalle`=":nSalle" WHERE nomPoste=":nomPoste"');
        $req->execute(array(
            'nPoste' => $nPoste,
            'nomPoste' => $nomPoste,
            'indIP' => $ip,
            'ad' => $ad,
            'typePoste' => $type,
            'nSalle' => $nsalle
        ));
    }
}