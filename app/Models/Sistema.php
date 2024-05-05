<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistema extends Model
{
    use HasFactory;
    // Defina a tabela correspondente
    protected $table = 'sistemas';

    protected $fillable = [
        'precoContaWise',
        'iban'
    ];
}
