<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ConferencesController;
use App\Http\Controllers\DivisionsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/teams', 'App\Http\Controllers\TeamController@index')->name('teams.index');
Route::resource('cities', CityController::class);
Route::resource('conferences', ConferencesController::class);
Route::resource('divisions', DivisionsController::class);

Route::get('/', function () {
    return view('welcome');
});
