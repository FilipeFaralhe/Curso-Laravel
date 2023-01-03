<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //actions são métodos dentro da controller
    public function contato(Request $request) {
        var_dump($request->input('nome'));
        return view('site.contato', ['titulo' => 'Contato']); //acessa a view contato retornando uma função nativa do laravel que se chama view
    }

    public function index() {
        return view('site.contato', ['titulo' => 'Contato']);
    }
}
