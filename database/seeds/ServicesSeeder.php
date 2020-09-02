<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service();
        $service->icon = 'fa fas-icon';
        $service->title = 'Web Development';
        $service->description = 'Modern and mobile-ready website that will help you reach all of your marketing.';
        $service->save();
    }
}
