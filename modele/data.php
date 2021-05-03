<?php


class data
{
    private $name;


    public function __construct($unName)
    {
        $this->name= $unName;
    }
    public function GetName()
    {
        return $this->name;
    }
}
?>
