<?php 

spl_autoload_register(function($class_name){
    $path = implode("/", explode('\\', $class_name));
    require_once $path. '.php';
});

use classes\Pessoa;
use classes\Imc;

$p1 = new Pessoa("Joao", 15, 1.75, 75);

Imc::calc($p1);
Imc::classifica($p1);

var_dump($p1);

?>