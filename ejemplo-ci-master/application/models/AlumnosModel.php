<?php namespace App\Models;

use CodeIgniter\Model;

class AlumnosModel extends Model 
{
	protected $table= 'alumnos';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nombre','apellido','nacimiento','promedio','sexo'];

	public function get($id = null){
		if($id === null){
			return $this->findAll();
		}

		return $this->asArray()
		->where(['id' => $id])
		->first();
	}
}
