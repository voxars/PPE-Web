<?php
class login 
{
    private $mail;
    private $pass;
    private $nom;
    private $level;
    private $id;

    public function __construct($mail, $pass, $nom, $level, $id){
        $this->mail=$mail;
        $this->pass=$pass;
        $this->nom=$nom;
        $this->etat=$etat;
        $this->level=$level;
        $this->id=$id;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getPass(){
        return $this->pass;
    }

    public function getLevel(){
        return $this->level;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getId(){
        return $this->id;
    }

    public function setEtat($etat):void{
        $this->etat=$etat;
    }
   
}