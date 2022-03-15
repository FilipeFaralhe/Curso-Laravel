<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Primeiro utilizaremos o método que irá ser utilizado get, post, put e etc.
// Primeiro parâmetro: é a uri.
// Segundo parâmetro: é uma função que irá retornar o que vai aparecer em tela (callback)
/*
    Quando o segundo parâmetro for uma função de callback, o laravel vai entender que é um callback,
    agora caso seja uma string, o laravel irá entender que é uma controller.
*/
// Route::get($uri, $callback);

/*
 Verbos http
-------------------------
 get
 post
 put
 patch
 delete
 options
*/

// Os nomes que damos as rotas só podem ser usados dentro da aplicação, não funcionará em um url
// É possível adicionar um nome para as rotas como no exemplo abaixo:

Route::get('/', 'PrincipalController@principal')->name('site.index'); // versão 7 laravel
// Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']); // versão 8 do laravel

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos'); // versão 7 laravel
// Route::get('/', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']); // versão 8 do laravel

Route::get('/contato', 'ContatoController@contato')->name('site.contato'); // versão 7 laravel
Route::post('/contato', 'ContatoController@contato')->name('site.contato'); // para envios de formulário via post, é necessário criar uma rota com o método post
// Route::get('/', [\App\Http\Controllers\ContatoController::class, 'contato']); // versão 8 do laravel

Route::get('/login', function () { return 'Login'; })->name('site.login');


// AGRUPANDO ROTAS

// Diferente das outras rotas, é necessário a inserção do prefix passado, exemplo: app/fornecedores
Route::prefix('app')->group(function () {
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

// ENCAMINHANDO PARÂMETROS DA ROTA PARA A CONTROLLER
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste')->where('p1', '[0-9]+')->where('p2', '[0-9]+');

// REDIRECIONAMENTO DE ROTAS

/*Route::get('/rota1', function () { echo 'Rota 1'; })->name('site.rota1');

// usando redirect em um retorno de uma rota ou uma controller
Route::get('/rota2', function () { echo redirect()->route('site.rota1'); })->name('site.rota2');*/

// usando redirect
// primeiro argumento é a uri e o segundo e o destino para onde vai caso seja acessado a rota
//Route::redirect('/rota2', 'rota1');

// FALLBACK
// usado para redirecionar para uma rota caso uma certa rota no seja encontrada
Route::fallback(function () {
    echo "A rota acessada não existe. <a href=". route('site.index') .">clique aqui</a> para ir para paǵina inicial";
});

// ADICIONANDO PARÂMETROS NA ROTAS

// Caso queira deixar um parâmetro de uma rota opcional é necessário colocar o interrogação na frente do próprio e definir uma valor padrão no callback
// O laravel le os padrões opcionais somente da direita pra esquerda.

/*Route::get('/contato/{nome?}/{sobrenome?}/{profissao?}', function (string $nome = "padrao", string $sobrenome = 'sobrenome não informado', string $profisaso = 'padrao') {
    echo "Estamos aqui: $nome - $sobrenome - $profisaso";
});*/


// TRATAMENTO DE PARÂMETROS DE ROTAS COM EXPRESSÕES REGULARES

// Caso seja enviado um parâmetro de string na categória, ele dará página não encontrada ao invés de um erro comum do laravel
// regular expression: '[0-9]+' = seus caracteres devem estar de 0-9, "+" e deve conter pelo menos um caractere
// regular expression: '[A-ZAa-z]+' = os caracteres enviados devem estar em uma cadeia de caractes de A-Z maiúsculos e a-z minúsculos, "+" e deve conter pelo menos um caractere
Route::get('/contato/{nome}/{categoria_id}', function (string $nome = 'deconhecido', int $categoria_id = 1) {
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-ZAa-z]+');
