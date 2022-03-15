<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //actions são métodos dentro da controller
    public function principal() {
        return view('site.principal'); //acessa a view principal retornando uma função nativa do laravel que se chama view
    }
}
