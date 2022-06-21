<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Cargos_Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('cargos')->truncate();
        DB::table('empleados')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(Cargos_Seeder::class);
        $this->call(Empleados_Seeder::class);
    }
}
