<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    //
    use HasFactory;

    protected $fillable = ['nombre', 'monto', 'fecha'];  // Columnas que se pueden asignar en masa
}
