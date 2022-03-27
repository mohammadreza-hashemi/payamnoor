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
    return view('welcome');
});


Route::get('login',[\App\Http\Controllers\AuthController::class,'index']);
Route::post('login',[\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::get('logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout');

Route::resource('users',\App\Http\Controllers\UserController::class);

Route::prefix('panel')->middleware(['auth'])->group(function () {
    Route::get('/',function () {
        return view('panel.index');
    });

});



