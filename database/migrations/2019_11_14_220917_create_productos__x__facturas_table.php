<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosXFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos__x__facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('producto_factura_cantidad');             
            $table->unsignedBigInteger('producto_prod_id');
            $table->foreign('producto_prod_id')->references('id')->on('Productos');
            $table->unsignedBigInteger('factura_fact_id');
            $table->foreign('factura_fact_id')->references('id')->on('Facturas');  
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
        Schema::dropIfExists('productos__x__facturas');
    }
}
