<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Percentis;
use App\Models\Test;
use Carbon\Carbon;

class PerformanceController extends Controller
{
    /**
     * Obtém o desempenho do aluno e os percentis de referência para um exercício específico.
     */
    public function getStudentPerformance($student_id, $exercicio)
    {
        $student = Student::findOrFail($student_id);
        $sexo = $student->gender;

        // Recupera os percentis de referência para o exercício, idade e sexo do aluno
        $percentis = Percentis::where('tipo_exercicio', $exercicio)
            ->where('sexo', $sexo)
            ->get(['idade', 'percentil_fraco', 'percentil_razoavel', 'percentil_bom', 'percentil_muito_bom', 'percentil_excelente']);

        // Mapeamento dos tipos de exercícios para as colunas da tabela de testes
        $colunaExercicio = [
            'abdominais' => 'abdominals',
            'flexibilidade' => 'flexibility',
            'corrida_6min' => 'run_6min',
            'medicine_ball' => 'medicine_ball',
            'salto_horizontal' => 'horizontal_jump',
            'quadrado' => 'square_run',
            'corrida_20m' => 'run_20m',
        ][$exercicio] ?? null;

        if (!$colunaExercicio) {
            return response()->json(['mensagem' => 'Exercício inválido.'], 400);
        }

        // Recupera o desempenho mais recente do aluno para o exercício selecionado
        $desempenhoAluno = $student->tests()->latest('test_date')->value($colunaExercicio);

        return response()->json([
            'desempenho' => $desempenhoAluno,
            'percentis' => $percentis
        ]);
    }

    /**
     * Obtém o desempenho completo do aluno e os percentis.
     */
    public function getStudentAllPerformance($studentId)
{
    $student = Student::find($studentId);

    if (!$student) {
        return response()->json(['message' => 'Aluno não encontrado'], 404);
    }

    // Obter percentis agrupados por tipo de exercício
    $percentis = Percentis::where('sexo', $student->gender)->get()->groupBy('tipo_exercicio');

    // Obter todos os testes do aluno, ordenados por data
    $tests = $student->tests()->orderBy('test_date', 'asc')->get();

    if ($tests->isEmpty()) {
        return response()->json(['message' => 'Nenhum teste encontrado para o aluno.'], 404);
    }

    // Prepara os dados de desempenho para cada teste
    $desempenho = $tests->map(function ($test) {
        return [
            'test_date' => $test->test_date,
            'age' => $test->age,
            'abdominals' => $test->abdominals,
            'flexibility' => $test->flexibility,
            'run_6min' => $test->run_6min,
            'medicine_ball' => $test->medicine_ball,
            'horizontal_jump' => $test->horizontal_jump,
            'square_run' => $test->square_run,
            'run_20m' => $test->run_20m,
        ];
    });

    return response()->json([
        'percentis' => $percentis,
        'desempenho' => $desempenho,
    ]);
}



    /**
     * Adiciona um novo teste e calcula a idade no momento do teste.
     */
    public function storeTest(Request $request)
    {
        $student = Student::findOrFail($request->student_id);

        // Calcula a idade do aluno no momento do teste
        $ageOnTestDate = Carbon::parse($student->birth_date)->diffInYears(Carbon::parse($request->test_date));

        Test::create([
            'student_id' => $student->id,
            'test_date' => $request->test_date,
            'age' => $ageOnTestDate,
            'abdominals' => $request->abdominals,
            'flexibility' => $request->flexibility,
            'run_6min' => $request->run_6min,
            'medicine_ball' => $request->medicine_ball,
            'horizontal_jump' => $request->horizontal_jump,
            'square_run' => $request->square_run,
            'run_20m' => $request->run_20m,
        ]);

        return response()->json(['message' => 'Teste adicionado com sucesso!']);
    }
}
