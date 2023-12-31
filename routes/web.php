<?php

use App\Http\Controllers\DoadorController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\PecaController;
use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('screens.teste');
});

Route::controller(EstoqueController::class)->group(function () {
    Route::get('/', 'displayVitrine')->name('vitrine');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group( function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        Route::get('/newitem', function () {
        return view('screens/newitem');
    })->name('newitem')->middleware(['admin']);
    Route::get('/erro', function () {
        return view('erro');
    })->name('erro');
    Route::get('/retirar', function () {
        return view('screens/retirar');
    })->name('retirar')->middleware(['admin']);
    Route::get('/controle', function () {
        return view('screens/controle');
    })->name('controle')->middleware(['admin']);
    Route::get('/pedidos', function () {
        return view('screens/pedidos');
    })->name('pedidos')->middleware(['admin']);

    Route::controller(EstoqueController::class)->group(function () {
        Route::get('/estoque', 'estoque')->name('estoque');
        Route::get('/controle', 'usuarios')->name('controle')->middleware(['admin']);
        Route::delete('/controle/{id}', 'destroy')->name('controle.delete')->middleware(['admin']);
    });

    Route::controller(DoadorController::class)->group(function () {
        Route::post('/doador/aplicar', 'aplicarCredito')->name('doador.aplicarCredito') ->middleware(['admin']);
        Route::post('/doador/ver_saldo', 'verSaldo')->name('doador.verSaldo') ->middleware(['admin']);
        Route::get('/dashboard', 'ShowSaldo')->name('dashboard');
        Route::get('/controle/edit/{id}', 'edit')->name('controle.edit') ->middleware(['admin']);
        Route::put('/controle/update/{id}', 'update')->name('controle.update') ->middleware(['admin']);
        Route::get('/ranking', 'rankingUsers')->name('ranking');
    });

    Route::controller(PecaController::class)->group(function () {
        Route::post('/pecas/retirar', 'retirarPeca')->name('pecas.retirarPeca')->middleware(['admin']);
        Route::post('/pecas/criar_peca', 'criarPeca')->name('pecas.criarPeca')->middleware(['admin']);
    });

    Route::controller(PedidoController::class)->group(function () {
        Route::post('/pedido/solicitar', 'solicitar')->name('pedido.solicitar');
        Route::get('/pedidos', 'pedidos')->name('pedidos');
        Route::delete('/pedidos/{id}', 'destroy')->name('controle.delete')->middleware(['admin']);
    });
});

