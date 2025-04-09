<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = ['nome_completo', 'cpf', 'cnh', 'dt_nascimento', 'endereco', 'telefone', 'cidade_id'];

    public function cidade() 
    {
        return $this->belongsTo(Cidade::class);
    }

}