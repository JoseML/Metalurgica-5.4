<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class documento_proceso extends Model
{
    protected $table = 'documento_proceso';
	protected $fillable = ['ruta','proceso_id','documento_id'];
    //

	public function proceso(){
		return $this->belongsToMany('App\Proceso'); 
	}

	public function documento(){
		return $this->belongsToMany('App\Documento'); 
	}
}