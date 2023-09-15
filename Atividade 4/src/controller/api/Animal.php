<?php

namespace Daoo\Aula03\controller\api;

use Daoo\Aula03\model\Animal as AnimalModel;
use Exception;

class Animal extends Controller
{

	private AnimalModel $model;

	public function __construct()
	{
		try{
			$this->model = new AnimalModel();
			$this->setHeader(200,'');
		}catch(Exception $error){
			$this->setHeader(500,"Error when connecting to the database");
			json_encode(["error"=>$error->getMessage()]);
		}	
	}

	public function index()
	{
		echo json_encode($this->model->read());
	}

	public function show($id)
	{
		$animal = $this->model->read($id);
		if ($animal) {
			$response = ['animal' => $animal];
		} else {
			$response = ['Erro' => "Animal was not found."];
			header('HTTP/1.0 404 Not Found');
		}
		echo json_encode($response);
	}

	public function store()
	{
		try {
			$this->validateAnimalRequest();

			$this->model = new AnimalModel(
				$_POST['nome'],
				$_POST['sexo'],
				$_POST['idade'],
				$_POST['peso']
			);
			
			if ($this->model->create()){
				echo json_encode([
					"success" => "Animal was created sucessfully",
					"data" => $this->model->getColumns()
				]);
			}else {
				$msg = 'Error when creating animal!';
				$this->setHeader(500,$msg);
   		 		throw new \Exception($msg);
			}
			} catch (\Exception $error) {
				echo json_encode([
				"error" => $error->getMessage(),
				"trace"=> $error->getTrace()
				]);
			}
		}

	public function update()
	{
		try {
			if(!$this->validatePostRequest(['id']))
				throw new Exception("Please inform animal's ID");
			
			$this->validateAnimalRequest();

			$this->model = new AnimalModel(
				$_POST['nome'],
				$_POST['sexo'],
				$_POST['idade'],
				$_POST['Peso']
			);
			$this->model->id = $_POST["id"];

	

			if ($this->model->update())
				echo json_encode([
					"success" => "animal was updated sucessfully",
					"data" => $this->model->getColumns()
				]);
			else throw new \Exception("Error when updating animal");
		} catch (\Exception $error) {
			$this->setHeader(500,'Server internal error.');
			echo json_encode([
				"error" => $error->getMessage()
			]);
		}
	}

	public function remove()
	{
		try {
			if (!isset($_POST["id"])){
				$this->setHeader(400,'Bad Request.');
				throw new \Exception('Erro: missing required field "id".');
			}
			$id = $_POST["id"];
			if ($this->model->delete($id)) {
				$response = ["message:" => "Animal id:$id was removed sucessfully!"];
			} else {
				$this->setHeader(500,'Internal Error.');
				throw new Exception("Error when removing animal");
			}
			echo json_encode($response);
		} catch (\Exception $error) {
			echo json_encode([
				"error" => $error->getMessage()
			]);
		}
	}


	public function filter() : void {
		
		if(!isset($_POST))
		   echo json_encode(["error" => "enviar os filtros"]);
		$reulsts = $this->model->filter($_POST);
		echo json_encode($reulsts);
	}

	private function validateAnimalRequest()
	{
		$fields = [
			'nome',
			'sexo',
			'idade',
			'peso'
		];
		if (!$this->validatePostRequest($fields))
			throw new \Exception('Error: missing required fields.');
	}
}
