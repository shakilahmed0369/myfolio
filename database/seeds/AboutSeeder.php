<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->about = 'experience in web site design and building and customization, also I am good at wordpress. I love to talk with you about our unique.';
        $about->age = 20;
        $about->residence = 'Bangladeshi';
        $about->freelance = 'Available';
        $about->address = 'Dhaka, Bangladesh';
        $about->save();
    }
}
