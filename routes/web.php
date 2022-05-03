<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\DeleteController;


Route::view('/', 'form' );
Route::post('/submit', [FormController::class, 'enviar']);
Route::get('/list', [ListController::class, 'listar']);
Route::get('/delete/{id}', [DeleteController::class, 'delete']);