<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Cliente extends Model implements Authenticatable
{
    use HasFactory;
    use AuthenticableTrait;

    // Defina a tabela correspondente
    protected $table = 'clientes';

    protected $fillable = ['name', 'email', 'password', 'dataNascimento', 'genero', 'contacto'];
    protected $dates = ['dataNascimento'];


    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function agendamento()
    {
        return $this->hasOne(Agendamento::class);
    }

    public function moedas()
    {
        return $this->hasMany(Moeda::class);
    }

    public function contaWise()
    {
        return $this->hasOne(ContaWise::class);
    }

    public function pagamentos()
    {
        return $this->hasMany(Pagamento::class);
    }

    public function redirecionamentos()
    {
        return $this->hasMany(Redirecionamento::class);
    }

}
