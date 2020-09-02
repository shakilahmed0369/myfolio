<?php

use App\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i=0; $i<=5; $i++):
            $data = new Technology();
            $data->icon_class = $faker->word();
            $data->title = $faker->sentence(5);
            $data->save();
        endfor;
    }
}
