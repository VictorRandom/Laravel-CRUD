<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UserController::class, 'index']);
Route::get('/usuario/register', [UserController::class, 'create']);
Route::post('/usuario/insert', [UserController::class, 'insert']);
Route::get('usuario/edit/{id}', [UserController::class, 'edit']);
Route::put('/usuario/update/{id}', [UserController::class, 'update']);
Route::delete('/usuario/delete/{id}', [UserController::class, 'delete']);
