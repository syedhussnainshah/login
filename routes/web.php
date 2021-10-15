<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::get('reg', function () {
    return view('singup');
});
Route::get('login', function () {
    return view('login');
});
Route::get('reg', function () {
    return view('singup');
});
Route::get('reg',[LoginController::class, 'index'])->name('index');
Route::post('create',[LoginController::class, 'create'])->name('create');
Route::post('logins',[LoginController::class, 'login'])->name('login');

