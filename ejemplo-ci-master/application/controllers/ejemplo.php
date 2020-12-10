<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ejemplo extends ResourceController
{
    protected $modelName = 'App\Models\AlumnosModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll(),"",200);
    }

	private function genericResponse($data,$msj,$code)
	{
		if($code == 200){
			return $this->respond(array(
				"data" =>$data,
				"code" =>$code
			)); //, 404, "no hay nada"
		} else{
			return $this->respond(array(
				"msj" => $msj,
				"code" => $code
			));
		}
	}
    // ...
}
