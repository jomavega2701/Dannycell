<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuario_rol_Usuario_Id');
            $table->foreign('usuario_rol_Usuario_Id', 'FK_Usuario_Rol_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('usuario_rol_rol_Id');
            $table->foreign('usuario_rol_rol_Id', 'FK_Usuario_Rol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('usuario_rol_Estado');
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
        Schema::dropIfExists('usuario_rol');
    }
}
