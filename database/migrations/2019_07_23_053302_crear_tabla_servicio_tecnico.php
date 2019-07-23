<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServicioTecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tecnico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipo', 100);
            $table->string('marca_equipo', 50);
            $table->string('modelo_equipo', 50);
            $table->text('estado_fisico_equipo', 100);
            $table->text('daño_equipo', 100);
            $table->double('valor_arreglo', 100);
            $table->text('garantia_descripcion_arreglo', 100);
            $table->double('abono_arreglo', 100);
            $table->double('saldo_arreglo', 100);
            $table->string('estado_arreglo', 100);
            $table->unsignedBigInteger('servicio_tecnico_usuario_Id');
            $table->foreign('servicio_tecnico_usuario_Id', 'FK_servicio_tecnico_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('servicio_tecnico');
    }
}
