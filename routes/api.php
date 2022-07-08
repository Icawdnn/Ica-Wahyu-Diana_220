<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DataApiController;
use \App\Http\Controllers\LoginApiController;

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
Route::get('/master/datas', [DataApiController::class, 'index']);
Route::post('/master/datas', [DataApiController::class, 'store']);
Route::get('/master/datas/{id}', [DataApiController::class, 'show']);
Route::put('/master/datas/{id}', [DataApiController::class, 'update']);
Route::delete('/master/datas/{id}', [DataApiController::class, 'destroy']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
