<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Empleado;
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
        Cargo::truncate();
        Empleado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
        $this->call(Cargos_Seeder::class);
        $this->call(Empleados_Seeder::class);
    }
}
