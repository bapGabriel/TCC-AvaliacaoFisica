<?php

// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'gender', 'birth_date'];

    // Garante que 'birth_date' seja tratado como uma data
    protected $casts = [
        'birth_date' => 'date',
    ];

    // Define a relação com o modelo Test
    public function tests()
    {
        return $this->hasMany(Test::class);
    }

    // Acessor para calcular a idade automaticamente
    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birth_date)->age;
    }
}
