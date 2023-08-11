<?php

namespace classes;

use classes\Abstracts\Pessoa;
use traits\IMC;

class Atleta extends Pessoa {
    public $nome, $idade, $altura, $peso;

    private $imc;
    
    use IMC;
    public function __construct($nome, $idade, $altura = NULL, $peso = NULL){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->idade = $idade;
        $this->calcIMC();
    }

   

    public function __toString(): string
    {
		$class_name = self::class;
        return "\n===Dados da $class_name==="
               ."\nNome: $this->nome"
               .($this->idade ? "\nIdade: $this->idade" : "")
               ."\nPessoa: $this->peso"
               ."\nAltura: $this->altura"
           		."\nIMC: ".number_format($this->imc, 3);
    }

}
?>