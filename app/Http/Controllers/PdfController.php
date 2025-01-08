<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller
{
    public function gerarPDF(Request $request)
    {
        try {
            // Validate input data
            $data = $request->validate([
                'student.name' => 'required|string',
                'student.weight' => 'nullable|numeric',
                'student.height' => 'nullable|numeric',
                'resultados' => 'required|array',
                'resultados.*.variavel' => 'required|string',
                'resultados.*.resultado' => 'nullable|string|numeric',
                'resultados.*.classificacao.classificacao' => 'nullable|string',
                'resultados.*.classificacao.classificacao_cor' => 'nullable|string',
            ]);

            // Load the PDF view with the validated data
            $pdf = SnappyPdf::loadView('students.pdf', $data);

            // Return the generated PDF as a download
            return $pdf->download('desempenho-aluno.pdf');
        } catch (\Throwable $e) {
            // Log the error details
            Log::error('Erro ao gerar PDF:', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            // Return a JSON response with an error message
            return response()->json(['error' => 'Erro ao gerar PDF. Consulte os logs.'], 500);
        }
    }
}
