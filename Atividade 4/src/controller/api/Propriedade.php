<?php

namespace Daoo\Aula03\controller\api;

use Daoo\Aula03\model\Propriedade as PropriedadeModel;
use Exception;

class Propriedade extends Controller
{

	private PropriedadeModel $model;

	public function __construct()
	{
		try{
			$this->model = new PropriedadeModel();
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
		$propriedade = $this->model->read($id);
		if ($propriedade) {
			$response = ['propriedade' => $propriedade];
		} else {
			$response = ['Erro' => "Propriedade was not found."];
			header('HTTP/1.0 404 Not Found');
		}
		echo json_encode($response);
	}

	public function store()
	{
		try {
			$this->validadeAtividadeRequest();

			$this->model = new PropriedadeModel(
				$_POST['nome'],
				$_POST['desc'],
				$_POST['latitude'],
				$_POST['longitude']
			);
			
			if ($this->model->create()){
				echo json_encode([
					"success" => "Propriedade was created sucessfully",
					"data" => $this->model->getColumns()
				]);
			}else {
				$msg = 'Error when creating propriedade!';
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
				throw new Exception("Please inform propriedade's ID");
			
			$this->validadeAtividadeRequest();

			$this->model = new PropriedadeModel(
				$_POST['nome'],
				$_POST['desc'],
				$_POST['latitude'],
				$_POST['longitude']
			);
			$this->model->id = $_POST["id"];

	

			if ($this->model->update())
				echo json_encode([
					"success" => "Propriedade was updated sucessfully",
					"data" => $this->model->getColumns()
				]);
			else throw new \Exception("Error when updating propriedade");
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
				$response = ["message:" => "Propriedade id:$id was removed sucessfully!"];
			} else {
				$this->setHeader(500,'Internal Error.');
				throw new Exception("Error when removing propriedade");
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

	private function validadeAtividadeRequest()
	{
		$fields = [
			'descricao',
			'valor',
			'started',
			'ended'
		];
		if (!$this->validatePostRequest($fields))
			throw new \Exception('Error: missing required fields.');
	}
}
