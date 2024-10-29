<?php

// app/Models/TestBattery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestBattery extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'year'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
