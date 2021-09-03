<?php

use App\Http\Controllers\Agents\AddAgentsController;
use App\Http\Controllers\Authentication\LoginController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Requests\GetAllRequestConttroller;
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
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('login-api', [LoginController::class, 'login'])->name('login-api');


//HOME ROUTE
Route::get('home', [HomeController::class, 'home'])->name('home');

//AGENTS ROUTE
Route::get('/add-agent', [AddAgentsController::class, 'add_agent'])->name('add-agent');
Route::get('/edit-agent', [AddAgentsController::class, 'edit_agent'])->name('edit-agent');

//REQUEST COLLECTIONS
Route::get('/get-regions-api', [GetAllRequestConttroller::class, 'get_regions'])->name('get-regions-api');
Route::get('/get-constituency-api', [GetAllRequestConttroller::class, 'get_constituency'])->name('get-constituency-api');
Route::get('/get-polling-station-api', [GetAllRequestConttroller::class, 'get_polling_station'])->name('get-polling-station-api');