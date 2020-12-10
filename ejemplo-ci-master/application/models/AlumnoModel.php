<?php namespace App\Models;

use CodeIgniter\Model;

class AlumnoModel extends Model 
{
	protected $table= 'alumnos';
	protected $primaryKey = 'id';
	protected $allowedFields = ['nombre','apellido','nacimiento','promedio','sexo'];

	function getAll(){
		return $this->asArray()
		->select('alumnos.*')
		->join('nombre')
		->first();
	}
}
