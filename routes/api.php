<?php

use App\Http\Controllers\PresenterController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\TVShowController;
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
//routes for Presenter
 Route::get('/presenters', [PresenterController::class, 'index']);
 Route::get('/presenters/{id}', [PresenterController::class, 'show']);
 Route::post('/presenters/add', [PresenterController::class, 'store']);
 Route::post('/presenters/delete/{id}', [PresenterController::class, 'destroy']);

 //routes for Studio
 Route::get('/studios', [StudioController::class, 'index']);
 Route::get('/studios/{id}', [StudioController::class, 'show']);
 Route::post('/studios/add', [StudioController::class, 'store']);
 Route::post('/studios/delete/{id}', [StudioController::class, 'destroy']);

  //routes for TVShow
  Route::get('/tvshows', [TVShowController::class, 'index']);
  Route::get('/tvshows/{id}', [TVShowController::class, 'show']);
  Route::post('/tvshows/add', [TVShowController::class, 'store']);
  Route::post('/tvshows/delete/{id}', [TVShowController::class, 'destroy']);
 
