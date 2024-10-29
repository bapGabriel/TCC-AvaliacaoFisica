<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Percentis extends Model
{
    use HasFactory;

    protected $table = 'percentis';

    public $timestamps = false; // Desativa timestamps automáticos
    
    protected $fillable = [
        'idade',
        'sexo',
        'tipo_exercicio',
        'percentil_fraco',
        'percentil_razoavel',
        'percentil_bom',
        'percentil_muito_bom',
        'percentil_excelente'
    ];
}
