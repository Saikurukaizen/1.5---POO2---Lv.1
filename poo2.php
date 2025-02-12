<?php
require_once 'animal.php';

$gos = new Gos("guau");
$gat = new Gat("miau");
function printSound(animal $animal){
    echo 'Oyes un '.$animal->makeSound().PHP_EOL;
}

printSound($gos);
printSound($gat);

?>