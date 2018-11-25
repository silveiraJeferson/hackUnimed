<?php

use Illuminate\Database\Seeder;

class SintomasSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $array = ['Hipertensão arterial', 'Dores na coluna', 'Depressão', 'Diabetes', 'Artrite ou doenças reumáticas', 'Neoplasia', 'Doenças cardiovasculares ', 'Doença renal', 'Mal de Parkinson', 'Doença de Alzheimer', 'Doenças endócrinas,nutricionais e metabólicas', 'Transtornos mentais e comportamentais', 'Doenças do aparelho respiratório'];

        foreach (range(0, count($array) - 1) as $i) {
            DB::table('sintomas')->insert([
                'nome' => $array[$i],
            ]);
        }
    }

}
