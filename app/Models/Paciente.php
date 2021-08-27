<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';
    protected $fillable=[
        'nombre','apellido','sexo','cedula','fechaNacimiento','edad','direccion','telefono','correo','observaciones'
    ];
    public $timestamps = false;
}
