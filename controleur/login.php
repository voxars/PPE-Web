<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}
include("modele/bd.liaison.inc.php");

@$login=$_POST["login"];
@$pass=md5($_POST["pass"]);
@$valider=$_POST["valider"];
$erreur="";

if(isset($valider)){
    $res=verif($login,$pass);
    
    if($res==1){
        $_SESSION["autoriser"]="oui";
        header("location:acceuil.php");
        
    }
    else{
        $erreur="Mauvais login ou mot de passe!";
    }
}


$titre = "Accueil";
include "$racine/vue/header.php";
include "$racine/vue/vuelogin.php";
include "$racine/vue/footer.php";
?>