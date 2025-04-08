<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoConta extends Model
{
    use HasFactory;

    protected $table = 'plano_contas';
    
    protected $fillable = [
        'descricao',
        'ativo',
        'natureza',
        'tipo',
        'observacao'
    ];
} 