<?php

use App\Funfact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(SocialSeeder::class);
        $this->call(AboutSeeder::class);
        $this->call(ServicesSeeder::class);
        $this->call(FunfactSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(KnowledgeSeeder::class);
        $this->call(TechnologySeeder::class);
        $this->call(WorkCatSeeder::class);
        $this->call(WorkSeeder::class);
        $this->call(BlogPostSeeder::class);
        $this->call(BlogCatSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
