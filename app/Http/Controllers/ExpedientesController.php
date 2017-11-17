<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class ExpedientesController extends Controller
{
	public function gestionExpediente(){
		return view('admins.expedientes.expedientes');
	}

	public function create(){

		$flujos = DB::table('workflow')->select('nombre','id')->orderBy('nombre','ASC')->pluck('nombre','id');
		$unidades = DB::table('unidad')->select('unidad','id')->orderBy('unidad','ASC')->pluck('unidad','id');
		$usuarios = DB::table('usuarios')->select('nombre','id')->orderBy('nombre','ASC')->pluck('nombre','id');
		return view('admins.expedientes.create',['flujos'=>$flujos,'unidad'=>$unidades,'usuario'=>$usuarios]);
	}

	public function store(Request $request){
		return view('admins.expedientes.create');
	}
    //
}
