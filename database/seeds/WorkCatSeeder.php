<?php

use App\Work_cat;
use Illuminate\Database\Seeder;

class WorkCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=2; $i++):
            $data = new Work_cat();
            $data->name = $faker->word();
            $data->save();
        endfor;
    }
}
