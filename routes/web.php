<?php

//use <-> import
use App\Http\Controllers\PrimerasRutasController;

Route::get('/', [PrimerasRutasController::class, 'index']);

