<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $table = 'produtos';
    protected $fillable = [
        'nome', 'descricao', 'preco', 'quantidade',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}

