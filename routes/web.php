<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

Route::get('/', function () {
    return redirect('/livros');
});

Route::resource('livros', LivroController::class);