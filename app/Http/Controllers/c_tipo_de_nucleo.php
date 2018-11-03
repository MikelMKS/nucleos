<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tiposdenucleos;

class c_tipo_de_nucleo extends Controller
{
      public function altatipodenucleo()
    {   
      return view ("sistema.altatipodenucleo");

    }
	public function insertatipodenucleos(Request $request)
    {
        $tnu = $request->tnu;
		
		$this->validate($request,[
	     'tnu'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/']
	     ]);

        
            $tipnu = new tiposdenucleos;
			
			$tipnu->tipo = $request->tnu;
			
			$tipnu->save();
				$proceso = "Alta de Tipo de Nucleo";
	$mensaje =  "El Tipo de Nucleo ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
