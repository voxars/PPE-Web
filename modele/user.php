<?php
class login 
{
    private $mail;
    private $pass;
    private $nom;
    private $etat;

    public function __construct($mail, $pass, $nom, $etat){
        $this->mail=$mail;
        $this->pass=$pass;
        $this->nom=$nom;
        $this->etat=$etat;
    }

    public function getMail(){
        return $this->mail;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setEtat($etat):void{
        $this->etat=$etat;
    }




}