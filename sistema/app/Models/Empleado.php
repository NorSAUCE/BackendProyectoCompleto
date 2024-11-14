<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //Especificamos los campos permitidos para el create 
    protected $fillable = [
        'Nombre',
        'Apellido',
        'Correo',
        'Foto',
    ];
};
