<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Cupones extends Model
{
    use HasFactory;
  use Softdeletes; 
  protected $primaryKey='idcupon';
  protected $fillable=
  [
      'idcupon',
      'paciente',
      'tipocupon',
      'porcentaje',
      'fecha',
      'fechavencimiento',
      'descripcion'
  ];
}

