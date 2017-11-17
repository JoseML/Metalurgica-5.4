<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Expediente;
use App\Proceso;
use App\Workflow;
use App\Buzon;



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

		$workflow = Workflow::find($request->flujos);
		$expediente = new Expediente;
		$expediente->descripcion = $request->descripcion;
		$expediente->proceso_id = $workflow->proceso_id;
		//dd($request);
		$expediente->save();

		$expediente->workflow()->attach($workflow,['estado' => "Por aprobar",'receptor_id' => $request->ente1,'emisor_id' => $request->ente2 ,'usuarios_id' => $request->usuario ]);

		//dd('guardado exitose');
        \Debugbar::info( $request);
        return view('admins.expedientes.expedientes');
       
	}
    //
}
