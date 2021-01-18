<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/mapaPreHubarov', [App\Http\Controllers\HomeController::class, 'mapaPreHubarov'])->name('mapaPreHubarov');
Route::get('/galeria', [App\Http\Controllers\HomeController::class, 'galeria'])->name('galeria');
Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class,'destroy'])->name('user.delete');

});
