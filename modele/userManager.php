<?php
 
require_once("modele/Manager.php");
require_once("modele/user.php");
 
class userManager extends Manager
{
 
    public function getList() //instancie une collection d'objets Salle
    {
        $q = $this->getPDO()->query('SELECT id, level, name, password, email FROM mrbs_users');
 
        $users = [];
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
 
            $users[$donnees['name']] = new users($donnees['id'], $donnees['level'], $donnees['name'], $donnees['password'], $donnees['email']);
        }
        return $users;
    }
 
    public function DoesUserExist($email, $password) //instancie une collection d'objets Salle
    {
        $exist = false;
        $q = $this->getPDO()->query('SELECT id, level, name, password, email FROM mrbs_users WHERE email = "' . $email . '" AND password = "' . $password . '"');
 
        $users = [];
        $level = 0;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[$donnees['name']] = new users($donnees['id'], $donnees['level'], $donnees['name'], $donnees['password'], $donnees['email']);
            $level = $donnees['level'];
        }
 
        if (count($users) != 0) {
            $exist = true;
            session_start();
            $_SESSION["connected"] = true;
            $_SESSION["level"] = $level;
        } else {
            $_SESSION["connected"] = false;
        }
 
        return $exist;
    }
}