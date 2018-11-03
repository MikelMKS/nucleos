<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produccion extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_prod';
   
   protected $fillable=['costo_nucleo','id/ave','siltter','corte_45','troquelado','toroide','acorazado','tba_300_600','herraje','armado','horno','barnizado','corte_tipo_c','rectificado','laboratorio','embalaje'];
   
     protected $date=['deleted_at'];	
}
