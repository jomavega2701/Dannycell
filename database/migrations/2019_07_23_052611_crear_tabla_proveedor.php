<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProveedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_proveedor', 100);
            $table->string('telefono_proveedor', 50);
            $table->string('direccion_proveedor', 50);
            $table->string('empresa_proveedor', 50);
            $table->unsignedBigInteger('proveedor_producto_Id');
            $table->foreign('proveedor_producto_Id', 'FK_proveedor_producto')->references('id')->on('productos')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('proveedor');
    }
}
