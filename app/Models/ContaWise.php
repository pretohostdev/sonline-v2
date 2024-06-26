<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContaWise extends Model
{
    use HasFactory;

    // Defina a tabela correspondente
    protected $table = 'conta_wises';

    protected $fillable = [
        'tipo',
        'data', 
        'estado', 
        'user_id',
        'comprovativo',
    ];
    
    protected $dates = ['data'];

    public function cliente()
    {
        return $this->belongsTo(User::class);
    }
}
