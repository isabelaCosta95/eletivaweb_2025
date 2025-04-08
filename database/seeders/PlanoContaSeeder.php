<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PlanoConta;

class PlanoContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planoContas = [
            [
                'descricao' => 'Despesas Operacionais',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Despesas com Pessoal',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Despesas de Marketing',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Despesas Administrativas',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Despesas Financeiras',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Despesas Tributárias',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => ''
            ],
            [
                'descricao' => 'Receitas Operacionais',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => '0'
            ],
            [
                'descricao' => 'Receitas de Vendas',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => '0'
            ],
            [
                'descricao' => 'Receitas Financeiras',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => '0'
            ],
            [
                'descricao' => 'Receitas de Investimentos',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => '0'
            ],
            [
                'descricao' => 'Ativo Circulante',
                'ativo' => 'S',
                'natureza' => 'C',
                'tipo' => 'A',
                'observacao' => '0'
            ]
        ];

        foreach ($planoContas as $planoConta) {
            PlanoConta::create($planoConta);
        }
    }
} 