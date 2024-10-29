<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id', // Certifique-se de que há uma coluna 'student_id' na tabela de testes para armazenar a referência ao aluno
        'height',
        'weight',
        'flexibility',
        'abdominals',
        'run_6min',
        'medicine_ball',
        'horizontal_jump',
        'square_run',
        'run_20m',
    ];

    // Relação com o aluno
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
