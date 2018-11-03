<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\proveedor;
use App\ubicacionalmacen;
use App\produccion;
use App\almacen;

class c_almacen extends Controller
{
     public function altaalmacen()
    {
		$proveedor = proveedor::where('activo','=','si')
		                      ->orderBy('proveedor','asc')
							  ->get();
		$ubicacionalmacen = ubicacionalmacen::where('activo','=','si')
		                      ->orderBy('ubicacion','asc')
							  ->get();
		$produccion = produccion::where('activo','=','si')
		                      ->orderBy('id_ave','asc')
							  ->get();
      return view ("sistema.altaalmacen")
	  ->with('proveedor',$proveedor)
	  ->with('ubicacionalmacen',$ubicacionalmacen)
	  ->with('produccion',$produccion);
    }
	
	public function insertaalmacen(Request $request)
    {
        $nro = $request->nro;
        $lro = $request->lro;
        $aro = $request->aro;
        $pro = $request->pro;
        $pes = $request->pes;
        $f_ing = $request->f_ing;
        $ubal = $request->ubal;
        $p_sal = $request->p_sal;
        $not = $request->not;
        $f_sal = $request->f_sal;
        $prod = $request->prod;

		
		$this->validate($request,[
	     'nro'=>'required|numeric',
	     'lro'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'aro'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'pes'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'f_ing'=>'required|date',
	     'p_sal'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'not'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
		 'f_sal'=>'required|date'
	     ]);

       
            $alm = new almacen;
			
			$alm->no_rollo = $request->nro;
        $alm->largo_rollo = $request->lro;
        $alm->ancho_rollo = $request->aro;
        $alm->proveedor = $request->pro;
        $alm->peso_kgs = $request->pes;
        $alm->fecha_ingreso = $request->f_ing;
        $alm->ubicacion_almacen = $request->ubal;
        $alm->peso_salida_kgs = $request->p_sal;
        $alm->no_orden_trabajosalida = $request->not;
        $alm->fecha_salida = $request->f_sal;
        $alm->produccion = $request->prod;
		
			$alm->save();
				$proceso = "Alta de Almacen";
	$mensaje =  "El Almacen ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
