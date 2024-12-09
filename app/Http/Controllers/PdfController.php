<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {
        $graficos = $request->input('graficos', []);

        if (empty($graficos)) {
            return response()->json(['error' => 'Nenhum gráfico foi enviado'], 400);
        }

        $html = '<h1>Gráficos Gerados</h1>';
        foreach ($graficos as $grafico) {
            $html .= "<img src='{$grafico['conteudo']}' style='width: 100%; margin-bottom: 20px;'/>";
        }

        $pdf = Pdf::loadHTML($html);
        return $pdf->download('graficos.pdf');
    }
}
