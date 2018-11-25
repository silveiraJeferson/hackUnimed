<?php

use Illuminate\Database\Seeder;

class DoencasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $array = ['Resfriado','Gripe','Pneumonia','Alergias','Amidalite','Bronquite','Rinite','Sinusite','Anorexia','Câncer','Catapora','Coroideremia','Eclampsia'];
        foreach (range(0, count($array)-1) as $i) {
            DB::table('doencas')->insert([
                'nome' => $array[$i],
                'id_especialidade' => rand(0,12),
                'id_sintoma' => rand(0,12)
            ]);
        }
    }
}
