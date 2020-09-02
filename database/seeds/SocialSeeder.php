<?php

use App\Social_link;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = new Social_link();
        $social->icon_class = 'fab fa-dribbble';
        $social->name = 'Dribbble';
        $social->link = "dribble.com";
        $social->save();
    }
}
