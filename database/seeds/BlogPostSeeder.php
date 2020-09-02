<?php

use App\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
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
            $data = new BlogPost();
            $data->title = $faker->sentence(5);
            $data->description = $faker->paragraph(5);
            $data->post_image = 'image.jpg';
            $data->blog_cat_id = '1';
            $data->save();
        endfor;
    }
}
