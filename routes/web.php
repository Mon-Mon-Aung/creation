<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ninjas', [NinjaController::class, 'index']);
Route::get('/ninjas/create', [NinjaController::class, 'create']);
Route::get('/ninjas/{id}', [NinjaController::class, 'show']);
