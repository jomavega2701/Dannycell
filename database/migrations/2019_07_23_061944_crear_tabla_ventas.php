<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cantidad', 50);
            $table->double('valor_venta', 50);
            $table->double('descuento', 50);
            $table->unsignedBigInteger('ventas_Usuario_Id');
            $table->foreign('ventas_Usuario_Id', 'FK_ventas_Usuario_id')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('ventas_producto_Id');
            $table->foreign('ventas_producto_Id', 'FK_ventas_productos_id')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('ventas');
    }
}
