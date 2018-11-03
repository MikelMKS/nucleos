<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Costos extends Migration
{
    public function up()
    {
        Schema::create('costos', function (Blueprint $table) {
                    $table->increments('id_nucleo');
					$table->integer('tipo_nucleo')->unsigned();
		           $table->foreign('tipo_nucleo')->references('id_nucleo')->on('tipos_de_nucleos');
					$table->double('modelo');
					$table->string('id_ave',20);
					$table->double('minutos_prod');
					$table->double('costo_mano_de_obra');
					$table->double('gastos_generales');
					$table->double('materia_prima');
					$table->double('costos_tipoc');
					$table->double('total');

			
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('costos');
    }
}
