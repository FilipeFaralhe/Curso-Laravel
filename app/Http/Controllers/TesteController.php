<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    // Não precisa ser os mesmos nomes dos parâmtros da rota, mas a ordem importa
    public function teste(int $p1, int $p2) {
        //echo "A soma de $p1 + $p2 é: " . ($p1 + $p2);

        //Encaminhando parâmetros do controlador para visualização

        //return view('site.teste', ['p1' => $p1, 'p2' => $p2]); // Array associativo

       //return view('site.teste', compact('p1', 'p2')); // compact()

        return view('site.teste')->with('valor1', $p1)->with('valor2', $p2); // with()

    }
}
