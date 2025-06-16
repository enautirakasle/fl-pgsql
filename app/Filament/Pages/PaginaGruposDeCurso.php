<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\Curso;

class PaginaGruposDeCurso extends Page
{
    public Curso $curso;

    // protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationLabel = null; // Oculta del sidebar
    protected static string $view = 'filament.pages.pagina-grupos-de-curso';

    public static function getSlug(): string
    {
        return 'cursos/{curso}/grupos'; // URL como /admin/cursos/1/grupos
    }

    public function mount(Curso $curso): void
    {
        $this->curso = $curso->load('grupos');
    }
}
