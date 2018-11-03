<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UbicacionAlmacen extends Migration
{
   public function up()
    {
        Schema::create('Ubicacion_almacen', function (Blueprint $table) {
                    $table->increments('id_ubicacion');
					$table->string('ubicacion',40);
					$table->string('estado',40);
			       $table->integer('id_area')->unsigned();
		           $table->foreign('id_area')->references('id_area')->on('Area_de_produccion');
			
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('Ubicacion_almacen');
    }
}
