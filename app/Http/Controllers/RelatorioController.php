<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RelatorioController extends Controller
{
    // F_S03 - Movimentação da Carga e Descarga
    public function movimentacaoCargaPDF(Request $request)
    {
        // Dados mock para exemplo
        $dados = [
            ['data' => '2024-06-01', 'carga' => 'Carga 1', 'origem' => 'SP', 'destino' => 'RJ', 'status' => 'Entregue'],
            ['data' => '2024-06-02', 'carga' => 'Carga 2', 'origem' => 'MG', 'destino' => 'SP', 'status' => 'Em trânsito'],
        ];
        $periodo = $request->input('periodo', '01/06/2024 a 02/06/2024');
        $pdf = Pdf::loadView('relatorios.movimentacao-carga', compact('dados', 'periodo'));
        return $pdf->download('movimentacao-carga.pdf');
    }

    // F_S04 - Gerenciar Paletes
    public function gerenciarPaletesPDF(Request $request)
    {
        $dados = [
            ['data' => '2024-06-01', 'palete' => 'Palete A', 'tipo' => 'Entrada', 'quantidade' => 10],
            ['data' => '2024-06-02', 'palete' => 'Palete B', 'tipo' => 'Saída', 'quantidade' => 5],
        ];
        $periodo = $request->input('periodo', '01/06/2024 a 02/06/2024');
        $pdf = Pdf::loadView('relatorios.gerenciar-paletes', compact('dados', 'periodo'));
        return $pdf->download('gerenciar-paletes.pdf');
    }

    // F_S05 - Extrato das Viagens
    public function extratoViagensPDF(Request $request)
    {
        $dados = [
            ['viagem' => 'Viagem 1', 'motorista' => 'João', 'origem' => 'SP', 'destino' => 'RJ', 'km' => 400, 'status' => 'Concluída'],
            ['viagem' => 'Viagem 2', 'motorista' => 'Maria', 'origem' => 'MG', 'destino' => 'SP', 'km' => 500, 'status' => 'Em andamento'],
        ];
        $periodo = $request->input('periodo', '01/06/2024 a 02/06/2024');
        $pdf = Pdf::loadView('relatorios.extrato-viagens', compact('dados', 'periodo'));
        return $pdf->download('extrato-viagens.pdf');
    }
} 