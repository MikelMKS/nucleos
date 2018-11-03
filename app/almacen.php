<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class almacen extends Model
{
      use SoftDeletes;
   protected $primaryKey = 'id_rollo';
   
   protected $fillable=['no_rollo','largo_rollo','ancho_rollo','proveedor','peso_kgs','fecha_ingreso','ubicacion_almacen','peso_salida_kgs','no_orden_trabajosalida','fecha_salida','produccion'];
   
     protected $date=['deleted_at'];	
}