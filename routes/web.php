<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/perpustakaan', [PerpustakaanController::class, 'index']);
