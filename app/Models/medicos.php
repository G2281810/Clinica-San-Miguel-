<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class medicos extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $primaryKey='idmedico';
    protected $fillable=['idmedico','nombre','appaterno','apmaterno','sexo','edad','telefono',
                            'correo','password','calle','numint','numext','idmun','colonia',
                            'idesp','hora_entrada','hora_salida','img'];
}
