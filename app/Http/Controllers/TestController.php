<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function create($studentId)
    {
        $student = Student::findOrFail($studentId);
        return view('tests/create', compact('student'));
    }

    public function store(Request $request, $studentId)
    {
        $request->validate([
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'flexibility' => 'required|numeric',
            'abdominals' => 'required|integer',
            'run_6min' => 'required|integer',
            'medicine_ball' => 'required|numeric',
            'horizontal_jump' => 'required|numeric',
            'square_run' => 'required|numeric',
            'run_20m' => 'required|numeric',
        ]);

        $student = Student::findOrFail($studentId);

        $test = $student->tests()->create([
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'flexibility' => $request->input('flexibility'),
            'abdominals' => $request->input('abdominals'),
            'run_6min' => $request->input('run_6min'),
            'medicine_ball' => $request->input('medicine_ball'),
            'horizontal_jump' => $request->input('horizontal_jump'),
            'square_run' => $request->input('square_run'),
            'run_20m' => $request->input('run_20m'),
        ]);

        return redirect()->route('students.index')->with('success', 'Teste adicionado com sucesso!');
    }
}
