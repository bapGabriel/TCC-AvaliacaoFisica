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
    // Comando para executar o script Python
    $command = "python3 C:/Users/bruno/OneDrive/Documentos/TCC/tcc/gerar_grafico.py $student_id $exercicio";
    $output = shell_exec($command);

    // Registra a saída do script Python para depuração
    \Illuminate\Support\Facades\Log::info("Python script output: " . $output);

    // Caminho onde o gráfico é salvo
    $filePath = storage_path("app/public/grafico_{$student_id}_{$exercicio}.png");

    if (file_exists($filePath)) {
        // Retorna mensagem de sucesso se o arquivo existir
        return response()->json([
            'mensagem' => 'Gráfico gerado com sucesso!',
            'imagem' => asset("storage/grafico_{$student_id}_{$exercicio}.png")
        ]);
    } else {
        // Registra o erro e retorna uma resposta de erro se o arquivo não existir
        \Illuminate\Support\Facades\Log::error("Falha ao gerar a imagem do gráfico. Arquivo não encontrado em: $filePath");
        return response()->json([
            'mensagem' => 'Erro ao gerar o gráfico.',
            'output' => $output
        ], 500);
    }
}

}
