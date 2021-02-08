<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HubaController;
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
    return view('home');
});

Auth::routes();
Route::get('opravObrazok', [App\Http\Controllers\HomeController::class, 'opravObrazok'])->name('opravObrazok');
Route::get('opravText', [App\Http\Controllers\HomeController::class, 'opravText'])->name('opravText');
Route::get('pridaj', [App\Http\Controllers\HomeController::class, 'pridaj'])->name('pridaj');
Route::get('/mapaPreHubarov', [App\Http\Controllers\HomeController::class, 'mapaPreHubarov'])->name('mapaPreHubarov');
Route::get('/galeria', [App\Http\Controllers\HubaController::class, 'show'])->name('galeria');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('huby/{huby}/delete', [App\Http\Controllers\HubaController::class, 'destroy'])->name('huby.delete');
Route::get('huby/{huby}/pridaj', [App\Http\Controllers\HubaController::class, 'create'])->name('huby.pridaj');
Route::get('huby/{huby}/store', [App\Http\Controllers\HubaController::class, 'store'])->name('huby.store');
Route::get('huby/{huby}/opravObrazok', [App\Http\Controllers\HubaController::class, 'opravObrazok'])->name('huby.opravObrazok');
Route::put('huby/{huby}/updateObrazok', [App\Http\Controllers\HubaController::class, 'updateObrazok'])->name('huby.updateObrazok');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class,'destroy'])->name('user.delete');
});
