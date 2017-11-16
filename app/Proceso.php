<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proceso extends Model
{
	protected $table = 'proceso';
	protected $fillable = ['nombre','descripcion','cedula_solicitante','nombre_solicitante'];
    //

	public function workflow(){
		return $this->hasMany('App\Workflow');
	}

	public function documento_proceso(){
		return $this->hasMany('App\documento_proceso');
	}

	public function expediente(){
		return $this->hasMany('App\expediente');
	}
}