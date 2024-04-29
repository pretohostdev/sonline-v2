<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'enderecos';

     protected $fillable = ['pais', 'cidade', 'bairro'];

     public function cliente()
    {
        return $this->belongsTo(User::class);
    }
}
