<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ubicacionalmacen extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_ubicacion';
   
   protected $fillable=['ubicacion','estado','id_area'];
   
     protected $date=['deleted_at'];	
}
