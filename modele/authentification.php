<?php
class authentification
{
    private $id;
    private $level;
    private $name;
    private $password;
    private $email;

    public function __construct($id, $level, $name, $password, $email)
    {
        $this->id=$id;
        $this->level=$level;
        $this->name=$name;
        $this->password=$password;
        $this->email=$email;
    }

    public function getId(){

        return $this->id ;

    }
    public function getLevel(){

        return $this->level ;

    }
    public function getName(){

        return $this->name ;

    }
    public function getPassword(){

        return $this->password ;

    }
    public function getEmail(){

        return $this->email ;

    }

}