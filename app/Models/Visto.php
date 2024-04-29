<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visto extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'vistos';

     protected $fillable = [
        'tipo',
        'dataPrevista',
        'paisDesejado',
    ];
 

    public function agendamento()
    {
        return $this->belongsTo(Agendamento::class);
    }
}
