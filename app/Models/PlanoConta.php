<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanoConta extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao'];
}
