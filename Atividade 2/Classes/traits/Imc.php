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

    public function isNormal(){
        if (($this->idade>=19 && $this->idade<=24 && $this->imc>=19 && $this->imc <=24) || 
            ($this->idade>24 && $this->idade<=34 && $this->imc>=20 && $this->imc <=25) ||
            ($this->idade>34 && $this->idade<=44 && $this->imc>=21 && $this->imc <=26) ||
            ($this->idade>44 && $this->idade<=54 && $this->imc>=22 && $this->imc <=27) ||
            ($this->idade>54 && $this->idade<=64 && $this->imc>=23 && $this->imc <=28) ||
            ($this->idade>64 && $this->imc>=24 && $this->imc <=29)
            ){
                return true;
            } else {
                echo "IMC inadequado.\n";
            }
        }
}

?>