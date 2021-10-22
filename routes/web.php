<?php

use App\Http\Controllers\InfopessoalController;
use App\Http\Controllers\Initial\InicioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [InicioController::class, "index"]);
Route::get('/creators', [InicioController::class, "creators"]);
Route::get('/project', [InicioController::class, "project"]);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource("infopessoal", InfopessoalController::class);
});
