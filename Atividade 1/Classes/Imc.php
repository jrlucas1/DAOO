<?php

namespace classes;


class Imc{
    public $peso, $altura, $imc, $classe;

    public function __construct($peso, $altura){
        $this->peso = $peso;
        $this->altura = $altura;

    }
    public static function calc(Pessoa $pessoa): float{
        $pessoa->imc = $pessoa->peso/($pessoa->altura * $pessoa->altura);
        return $pessoa->imc;
    }

    public static function classifica(Pessoa $pessoa): void{
        if($pessoa->imc < 18.5){
            echo "Abaixo do peso\n";
        }
        if($pessoa->imc >18.5 && $pessoa->imc< 24.9)
        {
            echo "Peso normal\n";
        }
        if($pessoa->imc> 25 && $pessoa->imc < 29.9){
            echo "Sobrepeso\n";
        }
        if($pessoa->imc > 30){
            echo "Obesidade\n";
        }
    }
}

?>