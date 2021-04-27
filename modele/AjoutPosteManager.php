<?php

require_once("modele/Manager.php");
require_once("modele/AjoutPoste.php");
require_once("modele/form.php");

class AjoutPosteManager extends Manager
{
    public function ajoutPost(){
        $req = $connexion->prepare('INSERT INTO `poste`(`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`, `nbLog`)VALUES (:nPoste, :nomPoste, :indIP, :ad, :typePoste, :nSalle, :nbLog)');
    }
}
// INSERT INTO `poste`(`nPoste`, `nomPoste`, `indIP`, `ad`, `typePoste`, `nSalle`, `nbLog`) VALUES ('test','test','130.120.80','01','TX', 's01',1);