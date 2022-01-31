<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'edad',
        'domicilio',
        'telefono',
        'estudios',
        'dni',
        'profesion',
        'trabajo_domicilio',
        'trabajo_telefono',
        'encargado',
        'user_id',
    ];
}
