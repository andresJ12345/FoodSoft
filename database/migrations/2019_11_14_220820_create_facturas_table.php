<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('factura_id');
            $table->string('factura_iva');
            $table->string('factura_total');
            $table->unsignedBigInteger('vendedor_vend_id');
            $table->foreign('vendedor_vend_id')->references('vendedor_id')->on('Vendedors');
            $table->unsignedBigInteger('cliente_cli_id');
            $table->foreign('cliente_cli_id')->references('cliente_id')->on('Clientes');
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
        Schema::dropIfExists('facturas');
    }
}
