<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Ruta de ejemplo
Route::get('/prueba', function (Request $request) {
    return response()->json(['message' => 'Hola desde la API']);
});
