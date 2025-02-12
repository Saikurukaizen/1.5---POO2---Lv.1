<?php

class Gat extends Animal{
    private $miau;

    public function __construct($miau){
        $this->miau = $miau;
    }

    public function makeSound(){
        return "Meu!";
    }
}

?>