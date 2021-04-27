<?php
function controleurPrincipal($action) {
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["accueil"] = "accueil.php";
    $lesActions["salle"] = "afficheSalle.php";
    $lesActions["ajoutPoste"] = "afficheAjoutPoste.php";
    $lesActions["envoiePoste"] = "afficheSalle.php";
    $lesActions["logout"] = "logout.php";
    


    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
?>

