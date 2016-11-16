<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class TeamController extends Controller
{
    public function index(){




       return view('team.index');
    }
    /**
     * create Group
     *
     * @return json
     *
     */
    public function addGroup(Request $request){
        if ($request->ajax()){




            return Response::json(array('code'=>Response::HTTP_OK,'message'=>'','data'=>''));
        }
    }
}
