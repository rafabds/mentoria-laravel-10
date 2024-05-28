<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VendaController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index'); //Index do projeto
});

//prefix é utilizado para refaturação, isso facilita muito na organização.
//Nesse caso abaixo, ele vai dizer tudo que vem abaixo de Produtos está dentro dele
Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index'])->name('produto.index'); //Index do projeto
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto'); //Tela para cadastrar produto
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto'])->name('cadastrar.produto'); //Salvar o produto cadastrado no banco
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto'); //Tela para atualizar produto
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto'])->name('atualizar.produto'); //Atualizar o produto no banco
    Route::delete('/delete', [ProdutosController::class, 'delete'])->name('produto.delete'); //Deletar o produto
});

Route::prefix('clientes')->group(function () {
    Route::get('/', [ClientesController::class, 'index'])->name('clientes.index'); //Index do projeto
    Route::get('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente'); //Tela para cadastrar produto
    Route::post('/cadastrarCliente', [ClientesController::class, 'cadastrarCliente'])->name('cadastrar.cliente'); //Salvar o produto cadastrado no banco
    Route::get('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente'); //Tela para atualizar produto
    Route::put('/atualizarCliente/{id}', [ClientesController::class, 'atualizarCliente'])->name('atualizar.cliente'); //Atualizar o produto no banco
    Route::delete('/delete', [ClientesController::class, 'delete'])->name('cliente.delete'); //Deletar o produto
});

Route::prefix('vendas')->group(function () {
    Route::get('/', [VendaController::class, 'index'])->name('vendas.index'); //Index do projeto
    Route::get('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda'); //Tela para cadastrar produto
    Route::post('/cadastrarVenda', [VendaController::class, 'cadastrarVenda'])->name('cadastrar.venda'); //Salvar o produto cadastrado no banco
    Route::get('/enviaComprovantePorEmail/{numero_da_venda}', [VendaController::class, 'enviaComprovantePorEmail'])->name("enviaComprovantePorEmail.venda");
});

Route::prefix('usuario')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index'); //Index do projeto
    Route::get('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario'); //Tela para cadastrar produto
    Route::post('/cadastrarUsuario', [UsuarioController::class, 'cadastrarUsuario'])->name('cadastrar.usuario'); //Salvar o produto cadastrado no banco
    Route::get('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario'); //Tela para atualizar produto
    Route::put('/atualizarUsuario/{id}', [UsuarioController::class, 'atualizarUsuario'])->name('atualizar.usuario'); //Atualizar o produto no banco
    Route::delete('/delete', [UsuarioController::class, 'delete'])->name('usuario.delete'); //Deletar o produto
});
