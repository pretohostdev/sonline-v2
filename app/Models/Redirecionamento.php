<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirecionamento extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'redirecionamentos';

     protected $fillable = ['data', 'estado', 'valor', 'paisOrigem', 'paisDestino'];
     protected $dates = ['data'];

     public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produto()
    {
        return $this->hasOne(Produto::class);
    }
}
