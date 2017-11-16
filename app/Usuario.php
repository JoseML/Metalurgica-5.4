<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
   	protected $table = 'usuarios';
	protected $fillable = ['cedula','usermane','password','rol','nombre'];
    //

	public function Buzon(){
		return $this->hasMany('App\Buzon');
	}

	public function unidad_usuarios(){
		return $this->hasMany('App\Unidad_Usuario');
	}

	
}
