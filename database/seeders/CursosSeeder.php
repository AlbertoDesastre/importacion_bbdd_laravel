<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("cursos")->insert([
            ["nombre" => "Artes",
             "duracion" => 300 ],
            ["nombre" => "Informática",
             "duracion" => 900],
            ["nombre" => "Filosofía",
             "duracion" => 420]
            ]);
        }
}
