<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Redirecionamento extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'redirecionamentos';

     protected $fillable = [
        'data', 
        'estado', 
        'paisOrigem', 
        'paisDestino',
        'comprovativo',

        // Novos campos
        'total',
        'fotoProduto',
        'enderecoEntrega',

        'user_id',  /* Chave Estrangeira */
        'produto_id'  /* Chave Estrangeira */
     ];
     protected $dates = ['data'];

     public function cliente()
    {
        return $this->belongsTo(User::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
