<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar registros en la tabla categorias
        DB::table('categorias')->insert([
            [
                'nombre' => 'zapatos de varón',
                'descripcion' => 'Calzado masculino de alta calidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nombre' => 'zapatos de mujer',
                'descripcion' => 'Calzado femenino de alta calidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
