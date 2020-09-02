<?php

use App\Blog_cat;
use Illuminate\Database\Seeder;

class BlogCatSeeder extends Seeder
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
            $data = new Blog_cat();
            $data->name = $faker->word();
            $data->save();
        endfor;
    }
    
}
