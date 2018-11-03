<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuarios extends Model
{
   use SoftDeletes;
   protected $primaryKey = 'id_usuario';
   
   protected $fillable=['nombre','ape_pat','ape_mat','usuario','password','fecha_nacimiento','sexo','telefono','email','imagen'];
   
     protected $date=['deleted_at'];	
}
