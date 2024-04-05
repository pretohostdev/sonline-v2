<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moeda extends Model
{
    use HasFactory;

    // Defina a tabela correspondente
    protected $table = 'moedas';

    protected $fillable = ['nome', 'codigo', 'simbolo', 'pais'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
