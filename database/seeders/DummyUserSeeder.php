<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Superadmin',
                'username'=>'admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin123')
            ],
            [
                'name'=>'Syalisa Amani Fatiha',
                'username'=>'salsa',
                'email'=>'salsa@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('salsa123')
            ],
            [
                'name'=>'Muhammad Niltal Amal',
                'username'=>'tata',
                'email'=>'tata@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('tata123')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
