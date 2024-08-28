<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
              // Admin
            [
            'name'=>'Akash Girotra',
            'username' => 'admin',
            'email' => 'akashgirotra1992@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'admin',
            'status' => '1'
            ],
            // Instructor
            [
                'name'=>'Baljinder SIngh',
                'username' => 'instructor',
                'email' => 'baljinder.iqac@tmu.ac.in',
                'password' => Hash::make('111'),
                'role' => 'instructor',
                'status' => '1'
            ],
            
             // User
             [
                'name'=>'User',
                'username' => 'user',
                'email' => 'akashk.webdev@tmu.ac.in',
                'password' => Hash::make('111'),
                'role' => 'user',
                'status' => '1'
            ],   


        ]);
    }
}
