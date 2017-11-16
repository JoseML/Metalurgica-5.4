<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
	protected $table = 'workflow';
	protected $fillable = ['nombre','proceso_id'];
    //

	public function proceso(){
		return $this->belongsTo('App\Proceso'); 
	}

	public function claps(){
 
 		return $this->belongsToMany('App\Expediente','buzon')
   		->using('App\Buzon')
   		->withPivot('estado');
 }


}
