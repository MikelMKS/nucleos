<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class costos extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_nucleo';
   
   protected $fillable=['tipo_nucleo','modelo','minutos_prod','costo_mano_de_obra','gastos_generales','materia_prima','costos_tipoc','total'];
   
     protected $date=['deleted_at'];	
}
