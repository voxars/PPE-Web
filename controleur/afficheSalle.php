<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/SalleManager.php");
require_once("$racine/modele/posteManager.php");
require_once("$racine/modele/areaManager.php");
    
$titre = "Salles";

$salleManager = new SalleManager();
$salles = $salleManager->getList();

$posteManager = new posteManager();
$postes = $posteManager->getList();

$areaManager = new areaManager();
$areas = $areaManager->getList();




include "$racine/vue/header.php";
include "$racine/vue/vueAfficheSalle.php";
include "$racine/vue/footer.php";
?>