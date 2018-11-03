<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proveedor;

class c_proveedor extends Controller
{
   public function altaproveedor()
    {   
      return view ("sistema.altaproveedor");

    }
	
	public function insertaproveedor(Request $request)
    {
        $prov = $request->prov;
        $desc = $request->desc;
        
			$this->validate($request,[
	     'prov'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
	     'desc'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/']
	     ]);

       
	 
            $prov = new proveedor;
			
			$prov->proveedor = $request->prov;
			$prov->descripcion = $request->desc;
			
			$prov->save();
				$proceso = "Alta de Proveedor";
	$mensaje =  "El proveedor ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
