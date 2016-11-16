<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function index(){

       return view('team.index');
    }


    public function welcome(){
        return 333;
    }


}
