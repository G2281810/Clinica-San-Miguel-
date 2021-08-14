<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Pacientes extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey='idpaciente';
    protected $fillable=
    [
        'idpaciente',
        'nombre',
        'apellidop',
        'apellidom',
        'sexo',
        'edad',
        'tiposangre',
        'telefono',
        'correo',
    ];
}
