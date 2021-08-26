<?php

namespace App\Http\Controllers\Agents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddAgentsController extends Controller
{
    //

    public function add_agent()
    {
        return view('pages.agents.add_agents');
    }
}