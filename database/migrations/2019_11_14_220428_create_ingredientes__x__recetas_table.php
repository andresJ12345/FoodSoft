<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientesXRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredientes__x__recetas', function (Blueprint $table) {
            $table->bigIncrements('ingrediente_receta_id');
            $table->string('indrediente_receta_cantidad');
            $table->unsignedBigInteger('ingrediente_ing_id');
            $table->foreign('ingrediente_ing_id')->references('ingrediente_id')->on('Ingredientes');
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
        Schema::dropIfExists('ingredientes__x__recetas');
    }
}
