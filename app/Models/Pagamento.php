<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

     // Defina a tabela correspondente
     protected $table = 'pagamentos';

     protected $fillable = ['valor', 'data', 'estado', 'dataVencimento'];
     protected $dates = ['data, datavencimento'];

     public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
