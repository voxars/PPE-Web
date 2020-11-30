<?php
    private nSalle;
    private nomSalle;
    private nbPoste;
    private indIP;
    private disabled;
    private area_id;
    private room_name;
    private sort_key;
    private description;
    private capacity;

    public function __construct($nSalle, $nomSalle, $nbPoste, $indIP, $disabled, $area_id, $room_name, $description, $capacity){
        $this->nSalle= $nSalle;
        $this->nomSalle= $nomSalle;
        $this->nbPoste= $nbPoste;
        $this->indIP= $indIP;
        $this->disabled= $disabled;
        $this->area_id= $area_id;
        $this->room_name= $room_name;
        $this->description= $description;
        $this->capacity= $capacity;
    }

    public function getNSalle(){
        return $this->$nSalle ;
    }

    public function getNomSalle(){
        return $this->nomSalle ;
    }

    public function getNbPoste(){
        return $this->nbPoste ;
    }

    public function getIndIP(){
        return $this->indIP ;
    }

    public function getDisabled(){
        return $this->disabled ;
    }

    public function getArea_id(){
        return $this->area_id ;
    }

    public function getRoom_name(){
        return $this->room_name ;
    }

    public function getDescription(){
        return $this->description ;
    }

    public function getCapacity(){
        return $this->capacity ;
    }

    public function setNSalle($nSalle): void {
        $this->nSalle = $nSalle ;
    }

    public function setn=NomSalle($nomSalle): void {
        $this->nomSalle = $nomSalle ;
    }

    public function setNbPoste($nbPoste): void {
        $this->nbPoste = $nbPoste ;
    }

    public function setIndIP($indIP): void {
        $this->indIP = $indIP ;
    }

    public function setDisabled($disabled): void {
        $this->disabled = $disabled ;
    }

    public function setArea_id($area_id): void {
        $this->area_id = $area_id ;
    }

    public function setRoom_name($room_name): void {
        $this->room_name = $room_name ;
    }

    public function setDescription($description): void {
        $this->description = $description ;
    }

    public function setCapacity($capacity): void {
        $this->capacity = $capacity ;
    }