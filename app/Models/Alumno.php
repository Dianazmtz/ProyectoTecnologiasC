<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'alumnos';
    protected $fillable = [
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'correo',
        'noCuenta',
        'estado',
        'fecha_registro',
    ];
    protected $dates = ['fecha_registro'];

    public function estadoAlumno()
    {
        return $this->estado == 1 ? 'Activo' : 'Inactivo';
    }

  
}