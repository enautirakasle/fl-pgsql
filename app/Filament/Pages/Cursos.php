<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables;
use App\Models\Curso;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\Action;



class Cursos extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static ?string $model = Curso::class;


    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.cursos';

    public function table(Table $table): Table
    {
        return $table
            ->query(Curso::query())
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('nombre')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('descripcion')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->dateTime('d/m/Y')->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->paginated()
            ->searchable()
            ->actions([
                // Tables\Actions\ViewAction::make(),

                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                // Action::make('verGrupos')
                // ->label('Ver Grupos')
                // ->url(fn (Curso $record) => route('filament.admin.pages.pagina-grupos-de-curso', ['curso' => $record]))
                // ->icon('heroicon-o-users')
            ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nombre')
                    ->label('Nombre del Curso')
                    ->required()
                    ->maxLength(255),

                Textarea::make('descripcion')
                    ->label('Descripción del Curso')
                    ->required()
                    ->maxLength(500),
            ]);
    }
    
}
