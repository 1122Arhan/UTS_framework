<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StandController;
use App\Models\Stand;

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
    return view('Auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/stand', [StandController::class, 'index']);
Route::get('/stand/form', [StandController::class, 'create']);
Route::post('/stand/store', [StandController::class, 'store']);
Route::get('/stand/edit/{id}', [StandController::class, 'edit']);
Route::put('/stand/{id}', [StandController::class, 'update']);
Route::delete('/stand/{id}', [StandController::class, 'destroy']);
