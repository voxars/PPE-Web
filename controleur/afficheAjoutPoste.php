<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

require_once("$racine/modele/SalleManager.php");
    
$titre="Ajouter un poste";

include "$racine/vue/header.php";
include "$racine/vue/vueAfficheAjoutPoste.php";
include "$racine/vue/footer.php";
?>