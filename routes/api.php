<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CantantesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/cantantes', [CantantesController::class, 'index']);
Route::put('/cantantes/actualizar/{id}',[CantantesController::class, 'update']);
Route::post('/cantantes/guardar', [CantantesController::class, 'store']);
Route::delete('/cantantes/borrar/{id}', [CantantesController::class, 'destroy']);
Route::get('/cantantes/buscar/{id}', [CantantesController::class, 'show']);
