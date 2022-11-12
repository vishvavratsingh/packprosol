<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Productcontroller;

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
// Route::get('/', [Productcontroller::class, 'index']);
Route::get('/', [Productcontroller::class, 'AboutUs']);
Route::get('/holisolgroup', [Productcontroller::class, 'Holisolgroup']);
Route::get('/productcatlog', [Productcontroller::class, 'Productcatlog']);
Route::get('/casestudies', [Productcontroller::class, 'Casestudies']);
// Route::get('/', [Productcontroller::class, 'index']);
// Route::get('/', [Productcontroller::class, 'index']);


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/holisolgroup', function () {
//     return view('holisolgroup');
// });
