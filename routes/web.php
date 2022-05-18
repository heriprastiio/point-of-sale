<?php

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
    return redirect('/admin');
});
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'App\Http\Controllers\CustomController@index');
    Route::post('/custom-login', 'App\Http\Controllers\CustomController@customLogin')->name('login.custom');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
