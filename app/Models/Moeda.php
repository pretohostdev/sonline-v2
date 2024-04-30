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
        'montante'
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }
}
