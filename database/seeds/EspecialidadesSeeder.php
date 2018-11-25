<?php

use Illuminate\Database\Seeder;

class EspecialidadesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $array = ['Ortopedia', 'Dermatologia', 'Radiologia', 'Cirurgiaplástica', 'Hematologia', 'Oncologia'];

        foreach (range(0, 5) as $i) {
            DB::table('especialidades')->insert([
                'nome' => $array[$i]
            ]);
        }
    }

}
