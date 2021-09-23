<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function welcome()
    {
        return view('pages.dashboard.welcome');
    }

    public function home()
    {
        return view('pages.dashboard.home');
    }

    public function region()
    {
        return view('pages.mandate.regions');
    }

    public function logout()
    {
        Auth::logout();

        // session()->forget('user');
        session()->flush();
        return view('pages.logout');
    }
}