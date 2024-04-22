<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

// use Illuminate\Foundation\Auth\Admin as Authenticatable;

class Admin extends Model implements Authenticatable
{
    // use HasFactory;
    use AuthenticableTrait;

     // Defina a tabela correspondente
     protected $table = 'admins';

     protected $fillable = ['name', 'email', 'password'];
}

