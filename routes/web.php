<?php

use App\Http\Controllers\CoachController;
use App\Http\Controllers\DisciplineController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\AbonnementController;

use App\Models\Coach;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/membres', MembreController::class);
Route::resource('/coaches', CoachController::class);
Route::resource('/disciplines', DisciplineController::class);
Route::resource('/abonnements', AbonnementController::class);
