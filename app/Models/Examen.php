<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $table = 'examens';
    protected $fillable=[
        'nombre','categoria_id','laboratorio_id','formato','unidadMedida','precio1','precio2',
        'valReferencia1','valReferencia2','valReferencia3','valReferencia4','valReferencia5','valReferencia6',
        'valReferencia7','valReferencia1'
    ];
    public $timestamps = false;
}
