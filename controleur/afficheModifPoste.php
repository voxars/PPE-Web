<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/ModifPosteManager.php");
require_once("$racine/modele/SalleManager.php");
require_once("$racine/modele/posteManager.php");
require_once("$racine/modele/areaManager.php");
require_once("$racine/modele/ipManager.php");
require_once("$racine/modele/typeManager.php");

$titre="Modifier un poste";

$nomPosteManager = new ModifPosteManager();
$nomPoste = $nomPosteManager->listePoste();

$salleManager = new SalleManager();
$salles = $salleManager->getList();

$posteManager = new posteManager();
$postes = $posteManager->getList();

$areaManager = new areaManager();
$areas = $areaManager->getList();

$ipManager = new ipManager();
$ip = $ipManager->getIp();

$typeManager = new typeManager();
$type = $typeManager->getList();

if (!empty($_POST['nPoste']) && !empty($_POST['nomPoste']) && !empty($_POST['indIP']) && !empty($_POST['ad']) && !empty($_POST['typePoste']) && !empty($_POST['nSalle']))
{
    $modifPosteManager = new ModifPosteManager();
    $modifPoste = $modifPosteManager->modifPoste($_POST['nPoste'], $_POST['nomPoste'], $_POST['indIP'], $_POST['ad'], $_POST['typePoste'], $_POST['nSalle'], $_POST ['nbLog']);
}


include "$racine/vue/header.php";
include "$racine/vue/vueAfficheModifPoste.php";
include "$racine/vue/footer.php";
?>