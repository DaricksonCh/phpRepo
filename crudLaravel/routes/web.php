<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
    return view('principal');
});
Route::get('/home', function () {
    return view('principal');
})->name('home');

Route::get('/user', [UsuarioController::class, 'index'])->name('index');
// Route::get('/user', [UsuarioController::class, 'index'])->name('index');
// Route::post('/user', [UsuarioController::class, 'store']);

// Route::resource('user', UsuarioController::class);


// Route::delete('/user/id', [UsuarioController::class, 'destroy'])->name('destroy');