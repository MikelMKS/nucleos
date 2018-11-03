<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class proveedor extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_prov';
   
   protected $fillable=['proveedor','descripcion'];
   
     protected $date=['deleted_at'];	
}
