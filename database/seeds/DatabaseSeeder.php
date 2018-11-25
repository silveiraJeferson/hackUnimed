<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EspecialidadesSeeder::class);
        $this->call(CooperadosSeeder::class);
        $this->call(DoencasSeeder::class);
        $this->call(SintomasSeeder::class);
    }
}
