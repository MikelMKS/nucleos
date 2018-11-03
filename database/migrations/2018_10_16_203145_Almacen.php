<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Almacen extends Migration
{
        public function up()
    {
        Schema::create('almacen', function (Blueprint $table) {
                    $table->increments('id_rollo');
					$table->integer('no_rollo');
					$table->double('largo_rollo');
					$table->double('ancho_rollo');
			       $table->integer('proveedor')->unsigned();
		           $table->foreign('proveedor')->references('id_prov')->on('proveedor');
					$table->double('peso<kgs>');
					$table->date('fecha_ingreso');
					$table->integer('ubicacion_almacen')->unsigned();
		           $table->foreign('ubicacion_almacen')->references('id_ubicacion')->on('ubicacion_almacen');
				   $table->double('peso_salida<kgs>');
				   $table->double('no_orden_trabajosalida');
					$table->date('fecha_salida');
					$table->integer('area_produccion')->unsigned();
		           $table->foreign('area_produccion')->references('id_area')->on('area_de_produccion');
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('almacen');
    }
}
