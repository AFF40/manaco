<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insertar registros en la tabla clientes
        DB::table('clientes')->insert([
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'direccion' => 'Calle Falsa 123',
                'celular' => '123456789',
                'nit' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Gómez',
                'direccion' => 'Avenida Siempre Viva 742',
                'celular' => '987654321',
                'nit' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
