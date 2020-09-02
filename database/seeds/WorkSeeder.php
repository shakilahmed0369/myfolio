<?php

use App\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
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
            $data = new Work();
            $data->work_image = $faker->word();
            $data->title = $faker->sentence(5);
            $data->description = $faker->paragraph(5);
            $data->link = 'google.com';
            $data->work_cat_id = '1';
            $data->save();
        endfor;
    }
}
