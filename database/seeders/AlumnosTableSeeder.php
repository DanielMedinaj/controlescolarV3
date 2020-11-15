<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alumnos')->insert([
            'num_lista' => '1234',
            'nombres' => 'Daniel Jesus',
            'apellidos' => 'Medina Avila',
            'genero' => 'Masculino',
            
        ]);
    }
}
