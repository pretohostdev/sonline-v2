<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;

    
    // Defina a tabela correspondente
    protected $table = 'documentos';

    protected $fillable = [
        'nome', 
        'imagem',
        'pdf'
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }
}
