<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{

    protected $table = 'documento';
	protected $fillable = ['tipo','nombre','tamaño'];
    //

	public function proceso(){
		return $this->hasMany('App\documento_proceso'); 
	}

	

}
