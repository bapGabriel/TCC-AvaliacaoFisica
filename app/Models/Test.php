<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'test_date',
        'age',
        'abdominals',
        'flexibility',
        'run_6min',
        'medicine_ball',
        'horizontal_jump',
        'square_run',
        'run_20m',
        'weight', 
        'height'
    ];
    

    // Relação com o aluno
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
