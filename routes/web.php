<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'form' );
Route::post('/submit', [FormController::class, 'enviar']);