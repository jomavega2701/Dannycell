<?php

use Illuminate\Database\Seeder;

class tablarolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'nombre' => 'danny daniel',
            'apellido' => 'vega mogollon',
            'identificacion' => '14398688',
            'telefono'  => '3508774876',
            'usuario' => 'admin',
            'contrasena' => '14398688'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Administrador'
            
        ]);

        DB::table('usuario_rol')->insert([
            'usuario_rol_rol_Id' => 1,
            'usuario_rol_usuario_Id' => 1,
            'usuario_rol_Estado' => 1
            
            //tecnico
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'jose manuel',
            'apellido' => 'bohorquez vega',
            'identificacion' => '1073245240',
            'telefono'  => '3114624837',
            'usuario' => 'joma',
            'contrasena' => '1073245240'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'tecnico'
            
        ]);

        DB::table('usuario_rol')->insert([
            'usuario_rol_rol_Id' => 2,
            'usuario_rol_usuario_Id' => 2,
            'usuario_rol_Estado' => 1
        ]);

        //vendedor
        DB::table('usuario')->insert([
            'nombre' => 'danna',
            'apellido' => 'garcia',
            'identificacion' => '123456789',
            'telefono'  => '123456789',
            'usuario' => 'danna',
            'contrasena' => '1234'
        ]);

        DB::table('rol')->insert([
            'nombre' => 'vendedor'
            
        ]);

        DB::table('usuario_rol')->insert([
            'usuario_rol_rol_Id' => 3,
            'usuario_rol_usuario_Id' => 3,
            'usuario_rol_Estado' => 1
        ]);
    }
}
