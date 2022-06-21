<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

         DB::table('empleados')->insert([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle 123456',
        'edad' => 36,
        'idCargo' => $cargo
    ]);
    DB::table('empleados')->insert([
        'nombre'=> 'Paula Andrade',
        'email' => 'paulaandrade@gmail.com',
        'direccion' => 'calle 13456',
        'edad' => 30,
        'idCargo' => 3
    ]);

    DB::table('empleados')->insert([
        'nombre'=> 'Camila Londoño',
        'email' => 'camilalondoño@gmail.com',
        'direccion' => 'calle 987654',
        'edad' => 30,
        'idCargo' => 3
    ]);

    DB::table('empleados')->insert([
        'nombre'=> 'Andrés Higuita',
        'email' => 'andruh@gmail.com',
        'direccion' => 'calle 456783',
        'edad' => 30,
        'idCargo' => 2
    ]);
    

    }
}
