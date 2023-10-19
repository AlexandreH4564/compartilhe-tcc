<?php

use App\Http\Controllers\DoadorController;
use App\Http\Controllers\EstoqueController;
use App\Http\Controllers\PecaController;
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
    return view('screens/teste');
});



// Route::resource('/Peca', '\App\Http\Controllers\PecaController')
//     ->middleware(['auth']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified' ])->group( function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
        Route::get('/newitem', function () {
        return view('screens/newitem');
    })->name('newitem');
    Route::get('/newdoador', function () {
        return view('screens/newdoador');
    })->name('newdoador');
    Route::get('/retirar', function () {
        return view('screens/retirar');
    })->name('retirar');
    Route::get('/controle', function () {
        return view('screens/controle');
    })->name('controle') ->middleware(['admin']);

    Route::controller(EstoqueController::class)->group(function () {
        Route::get('/estoque', 'estoque')->name('estoque');
    });

    Route::controller(DoadorController::class)->group(function () {
        Route::post('/doador/aplicar', 'aplicarCredito')->name('doador.aplicarCredito');
        Route::post('/doador/ver_saldo', 'verSaldo')->name('doador.verSaldo');
        Route::post('/doador/criar_doador', 'criarDoador')->name('doador.criarDoador');
    });

    Route::controller(PecaController::class)->group(function () {
        Route::post('/pecas/retirar', 'retirarPeca')->name('pecas.retirarPeca');
        Route::post('/pecas/criar_peca', 'criarPeca')->name('pecas.criarPeca');
    });

    Route::controller(DoadorController::class)->group(function () {
        Route::get('/dashboard', 'ShowSaldo')->name('dashboard');
    });

});

