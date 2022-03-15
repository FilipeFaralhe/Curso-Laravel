<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    //actions são métodos dentro da controller
    public function sobreNos(){
        return view('site.sobre-nos'); //acessa a view sobre-nos retornando uma função nativa do laravel que se chama view
    }
}
