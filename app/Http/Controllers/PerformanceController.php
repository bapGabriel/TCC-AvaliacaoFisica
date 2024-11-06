<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Percentis;


class PerformanceController extends Controller
{
    /**
     * Obtém o desempenho do aluno e os percentis de referência para um exercício específico.
     */
    public function getStudentPerformance($student_id, $exercicio)
{
    $student = Student::findOrFail($student_id);
    $idade = $student->idade;
    $sexo = $student->sexo;

    // Recupera os percentis de referência para o exercício, idade e sexo do aluno
    $percentis = Percentis::where('idade', $idade)
                          ->where('sexo', $sexo)
                          ->where('tipo_exercicio', $exercicio)
                          ->first();

    // Mapeamento dos tipos de exercícios para as colunas da tabela
    $colunaExercicio = [
        'abdominais' => 'abdominals',
        'flexibilidade' => 'flexibility',
        'corrida_6min' => 'run_6min',
        'medicine_ball' => 'medicine_ball',
        'salto_horizontal' => 'horizontal_jump',
        'quadrado' => 'square_run',
        'corrida_20m' => 'run_20m',
        // Adicione outros mapeamentos caso novas colunas/exercícios sejam adicionados no futuro
    ][$exercicio] ?? null;
    

    if ($colunaExercicio) {
        // Recupera os dados de desempenho do aluno para o exercício
        $desempenho = $student->tests()->select($colunaExercicio)->get();
    } else {
        return response()->json(['mensagem' => 'Exercício inválido.'], 400);
    }

    return response()->json([
        'desempenho' => $desempenho,
        'percentis' => $percentis
    ]);
}


    /**
     * Gera um gráfico para o desempenho do aluno em um exercício específico.
     */
    /**
 * Gera um gráfico para o desempenho do aluno em um exercício específico.
 */
public function gerarGrafico($student_id, $exercicio)
{
    // Lógica para buscar dados de desempenho e percentis
    $student = Student::find($student_id);
    $percentis = Percentis::where('tipo_exercicio', $exercicio)->first();

    if (!$student || !$percentis) {
        return response()->json(['error' => 'Dados não encontrados'], 404);
    }

    return response()->json([
        'desempenho' => $student->tests->pluck($exercicio),  // Exemplo de como acessar os dados de desempenho
        'percentis' => $percentis
    ]);
}

public function getPercentisByAge($exercicio)
{
    try {
        // Busca todos os percentis relacionados ao exercício, ordenados por idade
        $percentis = Percentis::where('tipo_exercicio', $exercicio)
                              ->orderBy('idade')
                              ->get(['idade', 'percentil_fraco', 'percentil_razoavel', 'percentil_bom', 'percentil_muito_bom', 'percentil_excelente']);
        
        if ($percentis->isEmpty()) {
            return response()->json(['mensagem' => 'Nenhum percentil encontrado para este exercício'], 404);
        }

        // Retorna o JSON com os percentis
        return response()->json(['percentis' => $percentis]);
    } catch (\Exception $e) {
        // Log para capturar qualquer erro no servidor
        Log::error('Erro ao buscar percentis: ' . $e->getMessage());
        return response()->json(['mensagem' => 'Erro ao buscar percentis'], 500);
    }
}




    


}
