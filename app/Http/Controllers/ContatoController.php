<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //actions são métodos dentro da controller
    public function contato(){
        var_dump($_POST);
        return view('site.contato', ['titulo' => 'Contato']); //acessa a view contato retornando uma função nativa do laravel que se chama view
    }
}
