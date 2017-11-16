<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Buzon extends Pivot
{


    protected $table = 'buzon';
	protected $fillable = ['estado','emisor_id','receptor_id','usuarios_id'];
    //
}
