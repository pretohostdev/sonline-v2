<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'agendamentos';

     protected $fillable = [
        'tipo',
        'data', 
        'estado', 
        'observacao',

        'user_id',
    ];
     protected $dates = ['data'];

     public function cliente()
     {
         return $this->belongsTo(User::class);
     }
    
}
