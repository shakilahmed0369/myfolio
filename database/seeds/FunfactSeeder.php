<?php

use App\Funfact;
use Illuminate\Database\Seeder;

class FunfactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $funFact = new Funfact();
        $funFact->icon_class = 'fa fas-icon';
        $funFact->fun_fact = '80 Albumes Listened';
        $funFact->save();
    }
}
