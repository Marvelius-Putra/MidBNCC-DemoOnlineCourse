<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        $user->fullname = "Marvelius Putra";
        $user->username = "Marvelius";
        $user->password = bcrypt('marvel');
        $user->email = "marvel@gmail.com";
        $user->address = "Bandung";
        $user->phone ="081912740";
        $user->age = "19";
        $user->BirthDate = "2015-01-03";
        $user->save();
    }
}
