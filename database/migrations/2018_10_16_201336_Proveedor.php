<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proveedor extends Migration
{
   public function up()
    {
        Schema::create('Proveedor', function (Blueprint $table) {
                    $table->increments('id_prov');
					$table->string('proveedor',20);
					$table->string('descripcion',20);
					$table->rememberToken();
				    $table->timestamps();
        });
    }

    public function down()
    {
     Schema::drop('Proveedor');
    }
}
