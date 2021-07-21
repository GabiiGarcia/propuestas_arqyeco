<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
   
}

public function create()
{
	return view('')
}

public function crear(Request $request){
	return $request->all();
	$comentarioNuevo = new App\comemntarios;
	$comentarioNuevo->nombre_c = $request->nombre_c;
	$comentarioNuevo->apellidos_c = $request->apellidos_c;
	$comentarioNuevo->email_c = $request->email_c;
	$comentarioNuevo->mensaje_c = $request->mensaje_c;

	$comentarioNuevo->save();

}
