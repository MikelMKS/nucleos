<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class tiposdenucleos extends Model
{
	use SoftDeletes;
   protected $primaryKey = 'id_nucleo';
   
   protected $fillable=['tipo'];
   
     protected $date=['deleted_at'];	
}
