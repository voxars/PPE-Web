<?php

require_once("modele/Manager.php");
require_once("modele/user.php");

class SalleManager extends Manager
{
    function verif($login, $pass){

    $cnx=getPDO();
    $res=0;
    $sel=$cnx->prepare("select * from mrbs_users where email=:login and password=:pass");
    $sel->bindValue(':login', $login, PDO::PARAM_STR);
    $sel->bindValue(':pass', $pass, PDO::PARAM_STR);
    $sel->execute(array($login,$pass));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        $_SESSION["prenomNom"]=ucfirst(strtolower($tab[0]["prenom"])).
        " ".strtoupper($tab[0]["nom"]);
        $res=1;
    }
        return $res;
    }
}
?>