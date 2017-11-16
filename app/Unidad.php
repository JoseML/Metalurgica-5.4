<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    
    protected $table = 'unidad';
	protected $fillable = ['unidad'];
    //


	public function BuzonRemitente(){
		return $this->hasMany('App\Buzon'); 
	}    
	
	public function BuzonEmisor(){
		return $this->hasMany('App\Buzon'); 
	}    
	
	public function Unidad_Usuarios(){
		return $this->hasMany('App\Unidad_Usuario');
	}
}
