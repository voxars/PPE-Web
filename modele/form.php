<?php
class Form{

    private $data;

    public function __construct($data = array()){
        $this->data = $data;
    }

    public function input($name){
        echo '<input type="text" name="' .$name. '" value=""';
        ?><br><br><br><?php
    }

    public function submit(){
        echo '<div class="row">
                <button type="submit" class="btn btn-primary btn-block" >Ajouter le poste</button>
              </div>';
    }
}