<?php


class Manager 
{
    protected function dbConnect()
    {
        $login = "root";
        $mdp = "root";
        $bd = "parcinfo";
        $serveur = "localhost";

        try
        {
            $conn = new PDO("mysql:host=$serveur;dbname=$bd", $login, $mdp, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } 
        catch (PDOException $e) 
        {
            print "Erreur de connexion PDO ";
            die();
        }
    }

    // Return the current PDO if exists or create one otherwise
    protected function getPDO() 
    {
        static $pdo = null;
        if ($pdo == null) {
            $pdo = $this->dbConnect();
        }
        return $pdo;
    }
    
}

?>