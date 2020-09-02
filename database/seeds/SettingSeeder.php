<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting();
        $setting->title = 'this is demo title';
        $setting->keyword = 'last-folio';
        $setting->description = "This is a description";
        $setting->theme = 1;
        $setting->save();
    }
}
