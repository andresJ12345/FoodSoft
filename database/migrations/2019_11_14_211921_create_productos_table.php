<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->string('producto_nombre');
            $table->string('producto_tamanio');
            $table->integer('precio');
            $table->unsignedBigInteger('receta_rec_id');
            $table->foreign('receta_rec_id')->references('receta_id')->on('Recetas');
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
        Schema::dropIfExists('productos');
    }
}
