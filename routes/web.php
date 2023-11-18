<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;
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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/sobre-nos',[SobreNosController::class, 'sobrenos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');


Route::get('/login', [ContatoController::class, 'login'])->name('');

Route::prefix('app')->group(function(){
    Route::get('/clientes', [ClienteController::class, 'clientes'])->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'fornecedores'])->name('app.fornecedores');
    Route::get('/produtos', [ProdutoController::class, 'produtos'])->name('app.produtos');
});

Route::fallback(function(){
    return 'nao existe';
});

/* expressoẽs regulares
 ->where('contato', '[A-Za-z]+')->where('contato', '[0-9]+') */
