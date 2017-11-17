<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
	protected $table = 'expediente';
	protected $fillable = ['descripcion','proceso_id'];
    //

	public function proceso(){
		return $this->belongsTo('App\Proceso'); 
	}

	public function Buzon(){
		return $this->hasMany('App\Buzon'); 
	}    
	
	public function workflow(){
 
 		return $this->belongsToMany('App\Workflow','buzon')
   		->using('App\Buzon')
   		->withPivot('estado');
 }
}
