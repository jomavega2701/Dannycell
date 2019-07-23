<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_producto', 100);
            $table->text('descripcion_producto', 100);
            $table->string('marca_producto', 50);
            $table->string('modelo_producto', 50);
            $table->string('cantidad_producto', 100);
            $table->double('precio_compra_producto', 100);
            $table->double('precio_venta_producto', 100);
            $table->double('ganancia_producto', 100);
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
