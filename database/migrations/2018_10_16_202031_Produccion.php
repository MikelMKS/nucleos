<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produccion extends Migration
{
    public function up()
    {
        Schema::create('produccion', function (Blueprint $table) {
                    $table->increments('id_prod');
			       $table->integer('tipo_de_nucleo')->unsigned();
		           $table->foreign('tipo_de_nucleo')->references('id_nucleo')->on('tipos_de_nucleos');
					$table->double('modelo',20);
					$table->string('id/ave',20);
					$table->string('siltter',20);
					$table->string('corte_45',20);
					$table->string('troquelado',20);
					$table->string('toroide',20);
					$table->string('acorazado',20);
					$table->string('tba_300/600',20);
					$table->string('herraje',20);
					$table->string('armado',20);
					$table->string('horno',20);
					$table->string('barnizado',20);
					$table->string('corte_tipo_c',20);
					$table->string('rectificado',20);
					$table->string('laboratorio',20);
					$table->string('embalaje',20);


			
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('produccion');
    }
}
