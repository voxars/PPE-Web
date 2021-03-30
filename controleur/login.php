<?php
session_start();
if($_SESSION["test1"]== null){
    $_SESSION["test1"] = false;
}
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
require_once("$racine/modele/userManager.php");



$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vuelogin.php";
include "$racine/vue/footer.php";
?>