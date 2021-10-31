<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;

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

Route::get('/', [userController::class, 'publichome'])->name('welcome');

Route::get('/admin/dash', [adminController::class, 'admindash'])->name('admindash')->middleware('checkUser');
Route::get('/user/dash', [userController::class, 'userdash'])->name('userdash')->middleware('checkUser');

Route::get('/admin/userlist', [adminController::class, 'userlist'])->name('userlist')->middleware('checkUser');

Route::get('/register', [userController::class, 'register'])->name('register');
Route::post('/register', [userController::class, 'registration'])->name('register');

Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginConfirm'])->name('login');

Route::get('/logout', [loginController::class, 'logout'])->name('logout');