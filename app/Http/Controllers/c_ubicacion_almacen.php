<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\areadeproduccion;
use App\ubicacionalmacen;

class c_ubicacion_almacen extends Controller
{
     public function altaubicacionalmacen()
    {
		$area = areadeproduccion::where('activo','=','si')
		                      ->orderBy('nombre_area','asc')
							  ->get();
      return view ("sistema.altaubicacionalmacen")
	  ->with('area',$area);
    }
	
	public function insertaubicacionalmacen(Request $request)
    {
        $ubi = $request->ubi;
        $est = $request->est;
        $idap = $request->idap;
		
		$this->validate($request,[
	     'ubi'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'est'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/']
	     ]);

            $uba = new ubicacionalmacen;
			
			 $uba->ubicacion = $request->ubi;
			 $uba->estado = $request->est;
			 $uba->id_area = $request->idap;
			
			
			$uba->save();
				$proceso = "Alta de Ubicacion de Almacen";
	$mensaje =  "La Ubicacion de Almacen ha sido agregada Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
