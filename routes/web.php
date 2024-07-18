<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactureController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/facture', [FactureController::class, 'creerFacture']);
Route::get('/facture/{reference}', [FactureController::class, 'consulterFacture']);
