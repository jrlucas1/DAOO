<?php

namespace traits;

trait IMC{
    protected $imc;

    public function calcIMC(): void{
       if(isset($this->peso) && isset($this->idade)){
            $this->imc = $this->peso/($this->altura * $this->altura);
       }
       else {
            echo "Defina uma altura e um peso antes de calcular o imc.";
       }
    }

    public function showIMC(): void
    {
        $msg = "\nIMC $this->nome: ";
        if(isset($this->imc)) {
            $msg.= number_format($this->imc, 2);
        } else {
            $msg .= " Erro, calcule o imc primeiro";
        }
        echo $msg;
    }
    
    public function classifica(): void{
        if($this->imc < 18.5){
            echo "Abaixo do peso\n";
        }
        if($this->imc >18.5 && $this->imc< 24.9)
        {
            echo "Peso normal\n";
        }
        if($this->imc> 25 && $this->imc < 29.9){
            echo "Sobrepeso\n";
        }
        if($this->imc > 30){
            echo "Obesidade\n";
        }
    }
}

?>