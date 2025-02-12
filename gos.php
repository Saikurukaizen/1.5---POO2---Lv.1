<?php

class Gos extends Animal{
    private $guau;

    public function __construct($guau){
        $this->guau = $guau;
    }

    public function makeSound(){
        return $this->guau;
    }
}
?>