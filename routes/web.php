<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');
// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

Route::resource('produtos', ProdutoController::class);



// // My routes. Routes types.
// // Teste1.
// Route::get('/test.index', function() {
//     return view('tests.index');
// })->name('hh');

// // Teste2.
// Route::get('/test.bola', function() {
//     return view('tests.bola');
// })->name('bolabola');

// // Rota do tipo any: aceita qualquer tipo de verbo http na rota.
// Route::any('/any', function() {
//     // return view('tests.bola');
//     return 'Anything!!!';
// });

// // Rota do tipo match: neste tipo é obrigatório informar quais os verbos https são permitidos.
// Route::match(['get', 'post'], '/match', function() {
//     return 'Match route!!!';
// });

// /* Rota com passagem de parâmetros. Entre chaves, após a URL, são passados os parâmetros necessários.
//     Neste exemplo, o parâmetro é /{id}. A função de callback deve interceptar o parâmetro, recebendo
//     o mesmo através da variável $id. */
// Route::get('/produto/{id}', function($id) {
//     return 'O id passado é: ' . $id;
// });

// /* Passando mais de um parâmetro via URL. Para que o parâmetro não seja obrigatório, a ? é
//     necessária no parâmetro passado e um valor padrão precisa ser definido na variável da função
//     de callback. */
// Route::get('/produto/{id}/{categoria_id?}', function($id, $categoria_id = null) {
//     return 'O id passado é: ' . $id . '<br />ID da Categoria: ' . $categoria_id;
// });

// Route::get('/redirroute', function() {
//     return view('redir');
// });

// // Rota com redirecionamento.
// Route::get('/testeredir', function() {
//     return redirect('/redirroute');
// });

// // Forma simplificada para fazer o redirect.
// Route::redirect('/testeredir2', '/redirroute');

// // Rotas nomeadas.
// Route::get('/news', function() {
//     return view('news');
// })->name('noticias');


// // Agrupamento de rotas;
// Route::prefix('admin')->group(function() {
//     Route::get('dashboard', function() {
//         return 'dashboard';
//     });

//     Route::get('clientes', function() {
//         return 'clientes';
//     });

//     Route::get('users', function() {
//         return 'users';
//     });

//     // Route::get('admin/dashboard', function() {
//     //     return 'dashboard';
//     // });

//     // Route::get('admin/clientes', function() {
//     //     return 'clientes';
//     // });

//     // Route::get('admin/users', function() {
//     //     return 'users';
//     // });
// });



