<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'fullname'=>'Marvelius Putra',
                'username'=>'Marvelius',
                'password'=>bcrypt('marvel'),
                'email'=>'marvel@gmail.com',
                'address'=>'Bandung',
                'phone'=>'081912740',
                'age'=>'19',
                'birthdate'=>'2015-01-03',

            ],
            [
                'fullname'=>'Jonathan Jason',
                'username'=>'Jason',
                'password'=>bcrypt('jason'),
                'email'=>'jason@gmail.com',
                'address'=>'Bandung',
                'phone'=>'081934753',
                'age'=>'18',
                'birthdate'=>'2017-05-03',
            ],

        ];

        foreach ($user as $u) {
            DB::table('users')->insert([
                'fullname'=>$u['fullname'],
                'username'=>$u['username'],
                'password'=>$u['password'],
                'email'=>$u['email'],
                'address'=>$u['address'],
                'phone'=>$u['phone'],
                'age'=>$u['age'],
                'birthdate'=>$u['birthdate'],

            ]);
        }
    }
}
