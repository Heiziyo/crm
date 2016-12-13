<?php

namespace App\Http\Controllers\Manage;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ManageController extends Controller
{
    public function index(){


        return view('manage.index');
    }



    public function department(){



        return view('manage.department');
    }
    public function addDepartment(){



        return Response::json(array('code'=>Response::HTTP_OK,'message'=>'','data'=>''));
    }



}
