<?php

namespace Daoo\Aula03\controller\api;

use Daoo\Aula03\model\Atividade as AtividadeModel;
use Exception;

class Atividade extends Controller
{

	private AtividadeModel $model;

	public function __construct()
	{
		try{
			$this->model = new AtividadeModel();
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
		$atividade = $this->model->read($id);
		if ($atividade) {
			$response = ['atividade' => $atividade];
		} else {
			$response = ['Erro' => "Atividade was not found."];
			header('HTTP/1.0 404 Not Found');
		}
		echo json_encode($response);
	}

	public function store()
	{
		try {
			$this->validadeAtividadeRequest();

			$this->model = new AtividadeModel(
				$_POST['descricao'],
				$_POST['valor'],
				$_POST['started'],
				$_POST['ended']
			);
			
			if ($this->model->create()){
				echo json_encode([
					"success" => "Atividade was created sucessfully",
					"data" => $this->model->getColumns()
				]);
			}else {
				$msg = 'Error when creating Atividade!';
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
				throw new Exception("Please inform atividade's ID");
			
			$this->validadeAtividadeRequest();

			$this->model = new AtividadeModel(
				$_POST['descricao'],
				$_POST['valor'],
				$_POST['started'],
				$_POST['enteded']
			);
			$this->model->id = $_POST["id"];

	

			if ($this->model->update())
				echo json_encode([
					"success" => "Atividade was updated sucessfully",
					"data" => $this->model->getColumns()
				]);
			else throw new \Exception("Error when updating atividade");
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
				$response = ["message:" => "Atividade id:$id was removed sucessfully!"];
			} else {
				$this->setHeader(500,'Internal Error.');
				throw new Exception("Error when removing atividade");
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
