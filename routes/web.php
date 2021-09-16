<?php

use App\Http\Controllers\Admin\AdministrationController;
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



//MIDDLEWARE
Route::group(['middleware' => ['userAuth']], function () {


    //HOME ROUTE
    Route::get('home', [HomeController::class, 'home'])->name('home');

    //AGENTS ROUTE
    Route::get('/add-agent', [AddAgentsController::class, 'add_agent'])->name('add-agent');
    Route::get('/edit-agent', [AddAgentsController::class, 'edit_agent'])->name('edit-agent');
    Route::get('/agent-list', [AddAgentsController::class, 'agent_list'])->name('agent-list');
    Route::get('/all-agents-list-api', [AddAgentsController::class, 'all_agent_list'])->name('all-agents-list-api');
    Route::post('/create-agent-api', [AddAgentsController::class, 'create_agent'])->name('create-agent-api');
    Route::post('/edit-agent-api', [AddAgentsController::class, 'edit_agent_api'])->name('edit-agent-api');
    Route::post('/get-agent-details', [AddAgentsController::class, 'get_agent_details'])->name('get-agent-details');
    Route::get('/send-agent-message', [AddAgentsController::class, 'send_message'])->name('send-agent-message');
    Route::post('/send-agent-message-api', [AddAgentsController::class, 'message_details'])->name('send-agent-message-api');


    //ADMINiSTRATION
    Route::get('/create-user', [AdministrationController::class, 'create_admin'])->name('create-user');
    Route::post('/create-admin-user-api', [AdministrationController::class, 'create_admin_user'])->name('create-admin-user-api');


    //LOGOUT
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


    //REQUEST COLLECTIONS
    Route::get('/get-regions-api', [GetAllRequestConttroller::class, 'get_regions'])->name('get-regions-api');
    Route::get('/get-constituency-api', [GetAllRequestConttroller::class, 'get_constituency'])->name('get-constituency-api');
    Route::get('/get-polling-station-api', [GetAllRequestConttroller::class, 'get_polling_station'])->name('get-polling-station-api');
});