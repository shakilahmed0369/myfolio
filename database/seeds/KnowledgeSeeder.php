<?php

use App\Knowledge;
use Illuminate\Database\Seeder;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=10; $i++):
            $data = new Knowledge();
            $data->title = $faker->sentence();
            $data->save();
        endfor;

    }
}
