<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->address = "Dhaka Bangladesh";
        $contact->email = 'admin@gmail.com';
        $contact->phone = '01969290200';
        $contact->save();
    }
}
