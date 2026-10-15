<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    // Nombre de la tabla en la base de datos (opcional si sigue la convención en plural "personas")
    protected $table = 'personas';

    // Campos permitidos para asignación masiva (Mass Assignment)
    protected $fillable = [
        'tipo_usuario',
        'codigo',
        'nombres',
        'apellidos',
        'email',
        'telefono',
    ];
}
