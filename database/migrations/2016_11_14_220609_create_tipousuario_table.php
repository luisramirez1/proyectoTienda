<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipousuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('tipo_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('tipo_usuario')->insert([
                'nombre' => 'Administrador'
            ]
        );

        DB::table('tipo_usuario')->insert([
                'nombre' => 'Invitado'
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipo_usuario');  
    }
}
