<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class areadeproduccion extends Model
{
	use SoftDeletes;
 protected $primaryKey = 'id_area';
   
   protected $fillable=['nombre_area','descripcion','id_usuario'];
   
     protected $date=['deleted_at'];	
}
