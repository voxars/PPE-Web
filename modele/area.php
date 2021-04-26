<?php

class Area
{
    private $id;
    private $area_name;


    public function __construct($unId, $unArea_name)
    {
        $this->id = $unId;
        $this->area_name= $unArea_name;
    }

    public function GetId()
    {
        return $this->id;
    }
    public function GetArea_name()
    {
        return $this->area_name;
    }
}
?>