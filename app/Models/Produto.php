<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    // Defina a tabela correspondente
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'marca',
        'imagem',
        'redirecionamento_id'
    ];

    public function redirecionamento()
    {
        return $this->hasOne(Redirecionamento::class);
    }
}
