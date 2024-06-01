<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ComandosController extends Controller
{
    public function servidor(){
         // Execute o comando desejado
        Artisan::call('cache:clear');

        return 'Comando executado com sucesso!';
    }
}
