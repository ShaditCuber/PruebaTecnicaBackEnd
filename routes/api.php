<?php

use App\Http\Controllers\Api\DispositivoController;
use App\Http\Controllers\Api\ModeloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MarcaController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('marcas')->controller(MarcaController::class)->group(function () {
    Route::get('/all', 'index');
});

Route::prefix('modelos')->controller(ModeloController::class)->group(function () {
    Route::get('/byMarca', 'index');
});

Route::prefix('dispositivos')->controller(DispositivoController::class)->group(function () {
    Route::get('/byModeloOrMarca', 'indexByModeloOrMarca');
    Route::get('/byBodega', 'indexByBodega');
});
