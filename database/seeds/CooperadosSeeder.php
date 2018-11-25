<?php

use Illuminate\Database\Seeder;

class CooperadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         

        foreach (range(0, 200) as $i) {
            $faker = Faker\Factory::create();
            
            
            DB::table('cooperados')->insert([
                'nome' => $faker->name,
                'especialidade' => rand(0, 5),
                'score' => rand(50, 100)
            ]);
        }
    }
}
