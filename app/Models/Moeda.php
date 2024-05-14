<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moeda extends Model
{
    use HasFactory;

    // Defina a tabela correspondente
    protected $table = 'moedas';

    protected $fillable = [
        'nome', 
        'data',
        'estado',
        'valorPagar',
        'documento',
        'montante',

        'user_id'
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }
}
