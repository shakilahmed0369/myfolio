<?php

use App\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testimonial = new Testimonial();
        $testimonial->image = 'image.jpg';
        $testimonial->quote = 'Modern and mobile-ready website that will help you reach all of your marketing. ';
        $testimonial->name = "Helen Floyd";
        $testimonial->title = "Art Directior";
        $testimonial->save();
    }
}
