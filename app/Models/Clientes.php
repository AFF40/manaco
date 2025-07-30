<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $fillable = [
        'nombre',
        'apellido',
        'direccion',
        'celular',
        'nit',
        'created_at',
        'updated_at',
    ];
}
