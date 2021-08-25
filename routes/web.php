<?php

use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
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

// Route::get('/', function () {
//     return view('authentication.login');
// });

//LOGIN ROUTE
Route::get('/' ,[LoginController::class, 'index'])->name('login');


//HOME ROUTE
Route::get('home',[HomeController::class, 'home'])->name('home');
