<?php

// app/Http/Controllers/StudentController.php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
{
    $students = Student::all(); // ou qualquer outra lógica para buscar os alunos
    return view('students.index', compact('students'));
}


public function show(Student $student)
{
    $student->load('tests'); // Caso precise carregar os testes relacionados
    return view('students.show', compact('student'));
}


    public function create(){
    return view('students.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'gender' => 'required|string|max:1',
        'birth_date' => 'required|date', // Validando birth_date
    ]);

    Student::create([
        'name' => $request->name,
        'gender' => $request->gender,
        'birth_date' => $request->birth_date, // Salvando birth_date
    ]);

    return redirect()->route('students.index')->with('success', 'Aluno adicionado com sucesso.');
}

}