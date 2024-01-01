<?php

use App\Http\Controllers\Backoffice\MasterData\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Backoffice\Dashboard\AdminController;

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
})->name('front');
Route::get('login', [ LoginController::class, 'show' ])->middleware('guest')->name('login');
Route::post('login', [ LoginController::class, 'login' ])->name('login-post');



Route::group(['middleware' => ['auth'],'as' => 'backoffice.', 'prefix' => 'backoffice'], function () {
    Route::get('/dashboard',[AdminController::class, 'index'] )->name("dashboard");
    Route::group(['middleware' => ['auth'],'as' => 'master-data.', 'prefix' => 'master-data'], function () {
        Route::resource('kategori', KategoriController::class);
    
    });

});


Route::get('/logout', [ LoginController::class, 'logout' ])->name('logout');
