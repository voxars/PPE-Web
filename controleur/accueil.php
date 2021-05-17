<?php
session_start();
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/userManager.php");

if(count($_POST)>0) {
    $userManager = new userManager();
    $user = $userManager->verifUser($_POST['email'],$_POST['password']); 
}



$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/footer.php";
?>