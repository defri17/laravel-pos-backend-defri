<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            
            'password' => Hash::make('12345678'),
            'name' => 'AKHMAD DEFRIANI',
            'phone' => '08123456789',
            'roles'=>'admin',
            'email' => 'defri@gmail.com',
        ]);    
        \App\Models\User::factory(10)->create();
       
    }
}