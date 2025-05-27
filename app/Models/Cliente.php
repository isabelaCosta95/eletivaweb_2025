<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nome_completo', 'cpf', 'rg', 'dt_nascimento', 'endereco', 'telefone', 'cidade_id', 'foto'];

    public function cidade() 
    {
        return $this->belongsTo(Cidade::class);
    }

}