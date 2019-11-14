<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('cliente_id');
            $table->string('cliente_nombre');
            $table->string('cliente_apellido');
            $table->string('cliente_tipo_documento');
            $table->string('cliente_num_doc');
            $table->string('cliente_edad');
            $table->text('cliente_direccion');
            $table->string('cliente_telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
