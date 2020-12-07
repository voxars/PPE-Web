<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/SalleManager.php");
    
$titre = "Salle";

$salleManager = new SalleManager();
$salles = $salleManager->getList(); 

include "$racine/vue/header.php";
include "$racine/vue/vueAfficheSalle.php";
include "$racine/vue/footer.php";
?>