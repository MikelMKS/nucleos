<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\tiposdenucleos;
use App\costos;

class c_costos extends Controller
{
     public function altacostos()
    {
		$nucleos = tiposdenucleos::where('activo','=','si')
		                      ->orderBy('tipo','asc')
							  ->get();
      return view ("sistema.altacostos")
	  ->with('nucleos',$nucleos);
    }
	
	public function insertacostos(Request $request)
    {
        $idtn = $request->idtn;
        $mod = $request->mod;
        $mpr = $request->mpr;
        $cmo = $request->cmo;
        $gg = $request->gg;
        $mp = $request->mp;
        $ctc = $request->ctc;
        $tot = $request->tot;

		$this->validate($request,[
	     'mod'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
	     'min'=>'required|numeric',
	     'cmo'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'gg'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'mp'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
	     'ctc'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     'tot'=>'required|',['regex:/^[0-9]+[.][0-9]{2}$/'],
	     ]);
        
            $costos = new costos;
			

			$costos->tipo_nucleo = $request->idtn;
        $costos->modelo = $request->mod;
        $costos->minutos_prod = $request->mpr;
        $costos->costo_mano_de_obra = $request->cmo;
        $costos->gastos_generales = $request->gg;
        $costos->materia_prima = $request->mp;
        $costos->costos_tipoc = $request->ctc;
        $costos->total = $request->tot;
			$costos->save();
				$proceso = "Alta de Costos";
	$mensaje =  "El Costo ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
