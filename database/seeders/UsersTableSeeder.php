<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([[
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'nombre' => 'X',
            'rol' => 'Administrador',
            
        ], [
            'username' => 'alumno',
            'password' => Hash::make('alumno123'),
            'nombre' => 'X',
            'rol' => 'Alumno',
            
        ], [
            'username' => 'docente',
            'password' => Hash::make('docente123'),
            'nombre' => 'X',
            'rol' => 'Docente',
            
        ]]);

    }
}
