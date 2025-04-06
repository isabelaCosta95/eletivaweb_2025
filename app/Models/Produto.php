<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['descricao', 'preco', 'estoque', 'id_categoria'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
