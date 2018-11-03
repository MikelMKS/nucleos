<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AreaDeProduccion extends Migration
{
    public function up()
    {
        Schema::create('Area_de_produccion', function (Blueprint $table) {
                    $table->increments('id_area');
					$table->string('nombre_are',40);
					$table->string('descripcion',200);
			
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('Area_de_produccion');
    }
}
