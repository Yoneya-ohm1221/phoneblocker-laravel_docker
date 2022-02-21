<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\PhoneController;

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
Route::get('admin/home', [HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/phone', 'Admin\PhoneController');
Route::resource('admin/phone', PhoneController::class);
Route::resource('admin/phone', 'Admin\PhoneController');
Route::resource('admin/reportnumber', 'Admin\ReportnumberController');

Route::resource('admin/phone', 'Admin\PhoneController');

Route::resource('admin/reportnumber', 'Admin\ReportnumberController');

Route::resource('admin/message', 'Admin\MessageController');


Route::resource('admin/user', 'Admin\UserController');
Route::resource('admin/member', 'Admin\MemberController');
//Route::resource('admin/member', memberController::class);
Route::resource('admin/user', 'Admin\UserController');
Route::resource('admin/member', 'Admin\MemberController');
