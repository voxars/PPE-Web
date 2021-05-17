<?php

require_once("modele/Manager.php");
require_once("modele/AjoutPoste.php");


class AjoutPosteManager extends Manager
{
    public function ajoutPost($nPoste, $nomPoste,$ip, $ad,$type, $nsalle){
        $req = $this->getPDO()->prepare('INSERT INTO `poste`(`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`)VALUES (:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle)');
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
// INSERT INTO `poste`(`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`, `nbLog`) VALUES ('test','test','130.120.80','01','TX', 's01',1);