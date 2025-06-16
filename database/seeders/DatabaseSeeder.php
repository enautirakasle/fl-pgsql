<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Curso;
use app\Models\Grupo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Use bcrypt for password hashing
        ]);

        // $this->call([
        //     CursoSeeder::class,
        // ]);
        $curso1 = \App\Models\Curso::create([
            'nombre' => 'Curso de Laravel',
            'descripcion' => 'Aprende a desarrollar aplicaciones web con Laravel.',
        ]);

        $curso2 = \App\Models\Curso::create([
            'nombre' => 'Curso de Filament',
            'descripcion' => 'Descubre cómo construir interfaces de usuario con Filament.',
        ]);

        $curso3 = \App\Models\Curso::create([
            'nombre' => 'Curso de PHP Avanzado',
            'descripcion' => 'Profundiza en las características avanzadas de PHP.',
        ]);

        // Crear grupos para cada curso
        $curso1->grupos()->createMany([
            ['nombre' => 'Grupo Laravel 1'],
            ['nombre' => 'Grupo Laravel 2'],
        ]);

        $curso2->grupos()->createMany([
            ['nombre' => 'Grupo Filament 1'],
        ]);

        $curso3->grupos()->createMany([
            ['nombre' => 'Grupo PHP Avanzado 1'],
            ['nombre' => 'Grupo PHP Avanzado 2'],
            ['nombre' => 'Grupo PHP Avanzado 3'],
        ]);

        


    }
}
