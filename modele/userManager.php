<?php
 
require_once("modele/Manager.php");
require_once("modele/user.php");
 
class userManager extends Manager
{
 
    public function getList() 
    {
        $q = $this->getPDO()->query('SELECT id, level, name, password, email FROM mrbs_users');
 
        $users = [];
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
 
            $users[$donnees['name']] = new users($donnees['id'], $donnees['level'], $donnees['name'], $donnees['password'], $donnees['email']);
        }
        return $users;
    }
 
    public function verifUser($email, $password) 
    {
        $exist = false;
        $q = $this->getPDO()->query('SELECT id, level, name, password, email FROM mrbs_users WHERE email = "' . $email . '" AND password = "' . $password . '"');
 
        $users = [];
        $level = 0;
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
            $users[$donnees['name']] = new user($donnees['id'], $donnees['level'], $donnees['name'], $donnees['password'], $donnees['email']);
            $level = $donnees['level'];
        }
 
        if (count($users) != 0) {
            $exist = true;
            $_SESSION["test1"] = true;
            $_SESSION["level"] = $level;
        } else {
            $_SESSION["test1"] = false;
        }
 
        return $exist;
    }

    public function logout()
    {
        $_SESSION["test1"] = false;

    }
}