<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('user');
Route::get('/doctor', [DoctorController::class, 'index'])->name('doctor')->middleware('doctor');
Auth::routes();
Route::get('/SixResult', [App\Http\Controllers\SixController::class, 'six'])->name('formSix');
Route::post('/six_result', [App\Http\Controllers\SixController::class, 'store'])->name('form_six');
Auth::routes();
Route::get('/form_Four', [App\Http\Controllers\FormFour::class, 'four'])->name('formFour');
Route::post('/four_Result', [App\Http\Controllers\FormFour::class, 'store'])->name('form_four');
Auth::routes();
Route::get('/insert', [App\Http\Controllers\PersonController::class, 'person'])->name('person');
Route::post('/create', [App\Http\Controllers\PersonController::class, 'store'])->name('personalinfo');
//crude code
Auth::routes();
Route::get('/crude.index', [App\Http\Controllers\AdminCrude::class, 'index'])->name('crude.index');
Auth::routes();
Route::get('/create.index', [App\Http\Controllers\AdminCrude::class, 'create'])->name('crude.create');
Auth::routes();
Route::post('/create.store', [App\Http\Controllers\AdminCrude::class, 'store'])->name('crude.store');
Auth::routes();
Route::get('/crude.edit', [App\Http\Controllers\AdminCrude::class, 'edit'])->name('crude.edit');
Route::put('/crude.update', [App\Http\Controllers\AdminCrde::class, 'update'])->name('crude.update');
Auth::routes();
Route::post('/create.destory{id}', [App\Http\Controllers\AdminCrude::class, 'destory'])->name('crude.delete');
