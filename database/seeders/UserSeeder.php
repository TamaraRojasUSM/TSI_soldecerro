<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->truncate(); // Truncates the 'profiles' table

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // nunca guardes contraseñas en texto plano
            'profile_id' => 1,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Usuario',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
            'profile_id' => 2,
        ]);


    }
}
