<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}


$titre = "Salles";
include "$racine/vue/header.php";
include "$racine/vue/vueAfficheSalle.php";
include "$racine/vue/footer.php";
?>