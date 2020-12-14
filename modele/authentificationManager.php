<?php

require_once ("modele/Manager.php");

function login($email, $mdpU) {
    if (!isset($_SESSION)) {
        session_start();
    }

    $util = getUtilisateurByemail($email);
    $mdpBD = $util["mdpU"];

    if (trim($mdpBD) == trim(crypt($mdpU, $mdpBD))) {
        // le mot de passe est celui de l'utilisateur dans la base de donnees
        $_SESSION["email"] = $email;
        $_SESSION["mdpU"] = $mdpBD;
    }
}

function logout() {
    if (!isset($_SESSION)) {
        session_start();
    }
    unset($_SESSION["email"]);
    unset($_SESSION["mdpU"]);
}

function getemailLoggedOn(){
    if (isLoggedOn()){
        $ret = $_SESSION["email"];
    }
    else {
        $ret = "";
    }
    return $ret;
        
}

function isLoggedOn() {
    if (!isset($_SESSION)) {
        session_start();
    }
    $ret = false;

    if (isset($_SESSION["email"])) {
        $util = getUtilisateurByemail($_SESSION["email"]);
        if ($util["email"] == $_SESSION["email"] && $util["mdpU"] == $_SESSION["mdpU"]
        ) {
            $ret = true;
        }
    }
    return $ret;
}
function getUtilisateurByemail($email) {
    $resultat = array();

    try {
        $req = $cnx->prepare("select * from mrbs_user where email=:email");
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();
        
        $resultat = $req->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }
    return $resultat;
}

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog principal de test
    header('Content-Type:text/plain');


    // test de connexion
    login("test@bts.sio", "sio");
    if (isLoggedOn()) {
        echo "logged";
    } else {
        echo "not logged";
    }

    // deconnexion
    logout();
}
?>