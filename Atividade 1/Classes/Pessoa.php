<?php

namespace classes;

class Pessoa {
    public $nome, $idade, $peso, $altura, $imc;

    public function __construct($nome, $idade, $altura = NULL, $peso = NULL){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->idade = $idade;
    }
    public function __destruct(){
        echo $this->nome . " foi destruido";
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function calcImc($peso, $altura){
        $this->imc = $peso/($altura * $altura);

        return $this->imc;
    }
}

?>