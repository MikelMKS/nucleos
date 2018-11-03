<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\usuarios;
use App\areadeproduccion;

class c_area_de_produccion extends Controller
{
     public function altaareadeproduccion()
    {
		$usuarios = usuarios::where('activo','=','si')
		                      ->orderBy('usuario','asc')
							  ->get();
      return view ("sistema.altaareadeproduccion")
	  ->with('usuarios',$usuarios);
    }
	 public function insertaareadeproduccion(Request $request)
    {
        $nom_area = $request->nom_area;
        $desc = $request->desc;
        $idu = $request->idu;
		
		$this->validate($request,[
	     'nom_area'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
	     'desc'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/']
	     ]);


       
            $adep = new areadeproduccion;
			
			$adep->nombre_area = $request->nom_area;
			$adep->descripcion = $request->desc;
			$adep->id_usuario = $request->idu;
			
			$adep->save();
				$proceso = "Alta de Area de Produccion";
	$mensaje =  "El Area de Produccion ha sido agregada Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}