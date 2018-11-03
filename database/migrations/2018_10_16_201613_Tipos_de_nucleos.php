<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TiposDeNucleos extends Migration
{
    public function up()
    {
        Schema::create('Tipos_de_nucleos', function (Blueprint $table) {
                    $table->increments('id_nucleo');
					$table->string('tipo',40);
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('Tipos_de_nucleos');
    }
}
