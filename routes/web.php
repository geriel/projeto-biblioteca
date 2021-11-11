<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EditorasController;
use App\Http\Controllers\LivrosController;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ROTAS DO CONTROLE DE EDITORAS
Route::group([
    'prefix'    => 'editoras',
    'as'        => 'editoras.'
    ],
    function () {
        Route::get('/', [EditorasController::class, 'index'])->name('index');
        Route::get('/criar', [EditorasController::class, 'create'])->name('create');
        Route::post('/', [EditorasController::class, 'store'])->name('store');
        Route::get('/{id}', [EditorasController::class, 'edit'])->name('edit');
        Route::post('/{id}', [EditorasController::class, 'update'])->name('update');
        Route::delete('/{id}', [EditorasController::class, 'destroy'])->name('destroy');
});

// ROTAS DO CONTROLE DE AUTORES
Route::group([
    'prefix'    => 'autores',
    'as'        => 'autores.'
    ],
    function () {
        Route::get('/', [AutoresController::class, 'index'])->name('index');
        Route::get('/criar', [AutoresController::class, 'create'])->name('create');
        Route::post('/', [AutoresController::class, 'store'])->name('store');
        Route::get('/{id}', [AutoresController::class, 'edit'])->name('edit');
        Route::post('/{id}', [AutoresController::class, 'update'])->name('update');
        Route::delete('/{id}', [AutoresController::class, 'destroy'])->name('destroy');
});

// ROTAS DO CONTROLE DE LIVROS
Route::group([
    'prefix'    => 'livros',
    'as'        => 'livros.'
    ],
    function () {
        Route::get('/', [LivrosController::class, 'index'])->name('index');
        Route::get('/criar', [LivrosController::class, 'create'])->name('create');
        Route::post('/', [LivrosController::class, 'store'])->name('store');
        Route::get('/{id}', [LivrosController::class, 'edit'])->name('edit');
        Route::post('/{id}', [LivrosController::class, 'update'])->name('update');
        Route::delete('/{id}', [LivrosController::class, 'destroy'])->name('destroy');
});

