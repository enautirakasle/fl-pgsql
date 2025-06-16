<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }


}
