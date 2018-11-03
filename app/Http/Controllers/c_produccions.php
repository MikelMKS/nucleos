<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\costos;
use App\produccion;

class c_produccions extends Controller
{
     public function altaproduccion()
    {
		$cnucleo = costos::where('activo','=','si')
		                      ->orderBy('modelo','asc')
							  ->get();
      return view ("sistema.altaproduccion")
	  ->with('cnucleo',$cnucleo);
    }
	
	public function insertaproduccion(Request $request)
    {
        $idtn = $request->idtn;
        $ave = $request->ave;
        $sil = $request->sil;
        $cor = $request->cor;
        $tro = $request->tro;
        $tor = $request->tor;
        $aco = $request->aco;
        $tba = $request->tba;
        $he = $request->he;
        $arm = $request->arm;
        $hor = $request->hor;
        $bar = $request->bar;
        $cotc = $request->cotc;
        $rect = $request->rect;
        $lab = $request->lab;
        $emb = $request->emb;
		
		$this->validate($request,[
	     'ave'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'sil'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'cor'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'tro'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'tor'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'aco'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'tba'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'he'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'arm'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'hor'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'bar'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'cotc'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'rect'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú]*$/'],
	     'lab'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/'],
	     'emb'=>'required|',['regex:/^[A-Z][A-Z,a-z, ,ñ,é,í,á,ó,ú][0-9]*$/']
	     ]);

        
	 
            $produc = new produccion;
			$produc->costo_nucleo = $request->idtn;
        $produc->id_ave = $request->ave;
        $produc->siltter = $request->sil;
        $produc->corte_45 = $request->cor;
        $produc->troquelado = $request->tro;
        $produc->toroide = $request->tor;
        $produc->acorazado = $request->aco;
        $produc->tba_300_600 = $request->tba;
        $produc->herraje = $request->he;
        $produc->armado = $request->arm;
        $produc->horno = $request->hor;
        $produc->barnizado = $request->bar;
        $produc->corte_tipo_c = $request->cotc;
        $produc->rectificado = $request->rect;
        $produc->laboratorio = $request->lab;
        $produc->embalaje = $request->emb;
			
			$produc->save();
				$proceso = "Alta de Produccion";
	$mensaje =  "La Produccion ha sido agregado Correctamente";	
	return view ('sistema.mensaje')
	->with('proceso',$proceso)
	->with('mensaje',$mensaje);
         
    }
}
