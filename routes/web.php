<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

Route::get('/', function () {
    return view('principal');
})->name('principal');

Route::get('/quem-somos', function () {
    return view('quem-somos');
})->name('quem-somos');

Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'store']);
