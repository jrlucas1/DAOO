<?php
namespace classes;
use classes\Abstracts\Pessoa;
use interfaces\iFuncionario;

class Medico extends Pessoa implements iFuncionario{

	private $CRM, $especialidade, $salario, $tempoContrato;

	public function __construct($nome, $crm,$especialidade,$idade=null, $salario, $tempoContrato)
	{
		$this->nome = $nome;
		$this->CRM = $crm;
		$this->especialidade = $especialidade;
		$this->idade = $idade;
        $this->salario = $salario;
	}

	public function getCRM(){
		return $this->CRM;
	}

	public function __toString()
	{
		$className = self::class;
		return 	"\n\n===Dados de $className ==="
			. "\nNome: $this->nome"
			. ($this->idade ? "\nIdade: $this->idade" : "")
			. "\nEspecialidade: $this->especialidade"
			. "\nCRM: $this->CRM\n";
	}

    public function mostraSalario():void{

        echo "Salário: R$". $this->salario;

    }

    public function mostraTempoContrato():void{
        echo "Contrato de " . $this->tempoContrato . "anos";
    }

}