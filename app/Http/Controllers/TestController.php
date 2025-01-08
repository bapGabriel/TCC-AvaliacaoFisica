<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Test;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    /**
     * Exibe o formulário de criação de teste para um aluno específico.
     */
    public function create($studentId)
    {
        $student = Student::findOrFail($studentId);
        return view('tests.create', compact('student'));
    }

    /**
     * Armazena um novo teste para o aluno e calcula a idade no momento do teste.
     */
    public function store(Request $request, $studentId)
{
    // Validação dos dados de entrada
    $request->validate([
        'test_date' => 'required|date', // Adiciona validação para test_date
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

    // Localiza o aluno pelo ID
    $student = Student::findOrFail($studentId);

    // Calcula a idade do aluno no momento do teste com base em test_date
    $ageAtTest = Carbon::parse($student->birth_date)->diffInYears(Carbon::parse($request->input('test_date')));

    // Cria o teste para o aluno com os dados e a idade calculada
    $test = $student->tests()->create([
        'test_date' => $request->input('test_date'), // Salva o test_date no banco de dados
        'age' => $ageAtTest, // Armazena a idade do aluno no momento do teste
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

    // Redireciona com uma mensagem de sucesso
    return redirect()->route('students.show', ['student' => $student->id])
                     ->with('success', 'Teste adicionado com sucesso!');
                
}

}
