<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormController::class , 'show']);
Route::post('/form/store', [FormController::class , 'store']);
