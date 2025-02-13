<?php

$gos = new Gos('gos');
$gat = new Gat('gat');

$gos->makeSound();
$gat->makeSound();

abstract class Animal{
    protected $nAnimal;


    public function __construct(string $nAnimal){
        $this->nAnimal = $nAnimal;
    }

    abstract public function makeSound(): void;
}

class Gos extends Animal{
    public function makeSound(): void{
        echo "Aquest {$this->nAnimal} diu: Bup Bup!";
    }
}

class Gat extends Animal{
    public function makeSound(): void{
        echo "Aquest {$this->nAnimal} diu: Meu!";
    }
}

?>