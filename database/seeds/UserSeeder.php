<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User();
       $user->name = 'Jone Deo';
       $user->title = 'Web Developer';
       $user->email = 'admin@admin.com';
       $user->password = '$2y$10$NKSj0tN3xVvhA6a5HRWug.wrcZpr1/zuv5KNCWetE./JUZtTN8SIm';// the password is admin
       $user->image = 'avatar.jpg';
       $user->cover_image = 'cover.jpg';
       $user->cv_link = 'https://google.com';
       $user->save();
    }
}
