<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'S',
                'cnpj' => '',
                'ddd' => '11', // São Paulo (SP)
                'telefone' => '0000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'N',
                'cnpj' => null,
                'ddd' => '85', // Fortaleza (CE)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32', // Juiz de Fora (MG)
                'telefone' => '0000-0000'
            ],
        ];

        //Operador ternário
        $msg = isset($fornecedores[0]['cnpj']) ? 'Existe cnpj' : 'Não existe cnpj';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
