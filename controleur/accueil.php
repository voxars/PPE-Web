<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
session_start();
$_SESSION["autoriser"]="";
   if($_SESSION["autoriser"]!="oui"){
    include "$racine/controleur/login.php";
      exit();
   }

$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vueAccueil.php";
include "$racine/vue/footer.php";
?>