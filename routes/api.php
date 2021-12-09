<?php

use App\Http\Controllers\PresenterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
 Route::get('/presenters', [PresenterController::class, 'index']);
 Route::get('/presenters/{id}', [PresenterController::class, 'show']);
 Route::post('/presenters/add', [PresenterController::class, 'store']);
 Route::post('/presenters/delete/{id}', [PresenterController::class, 'destroy']);
 
