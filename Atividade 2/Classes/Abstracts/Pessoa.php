<?php

namespace classes\Abstracts;

class Pessoa {
    public $nome, $idade;

    public function __destruct(){
        echo $this->nome . " foi destruido";
    }
}

?>