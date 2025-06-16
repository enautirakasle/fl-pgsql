<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Curso::create([
            'nombre' => 'Curso de Laravel',
            'descripcion' => 'Aprende a desarrollar aplicaciones web con Laravel.',
        ]);

        \App\Models\Curso::create([
            'nombre' => 'Curso de Filament',
            'descripcion' => 'Descubre cómo construir interfaces de usuario con Filament.',
        ]);

        \App\Models\Curso::create([
            'nombre' => 'Curso de PHP Avanzado',
            'descripcion' => 'Profundiza en las características avanzadas de PHP.',
        ]);
    }
}
