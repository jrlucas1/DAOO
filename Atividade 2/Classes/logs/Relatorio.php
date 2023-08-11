<?php 
namespace classes\logs;
use classes\Abstracts\Pessoa;
use classes\Medico;

class Relatorio{

	private $pessoas = [];

	public function add(Pessoa $pessoa):void
	{
		$this->pessoas[]=$pessoa;
	}
	
	public function log(Pessoa $pessoa):void
	{
        if($pessoa instanceof Medico){
		echo "\nlog: ".$pessoa;
    }
	}

	public function imprime(): void{
		echo "\n### RELATORIO ###\n";
		foreach ($this->pessoas as $pessoa) 
			$this->log($pessoa);
		echo "\n#############\n";
	}
}