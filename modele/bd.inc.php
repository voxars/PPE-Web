<?php

function connexionPDO() {
    $login = "Amaleo";
    $mdp = "A79f4623.";
    $bd = "parcinfo";
    $serveur = "localhost";

    try {
        $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        print "Erreur de connexion PDO ";
        die();
    }
}


// Return the current PDO if exists or create one otherwise
function getPDO() {
	static $pdo = null;
	if ($pdo == null) {
		$pdo = connexionPDO();
	}
	return $pdo;
}


if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    // prog de test
    header('Content-Type:text/plain');

    echo "connexionPDO() : \n";
    print_r(connexionPDO());
}
?>
