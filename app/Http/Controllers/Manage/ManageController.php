<?php

namespace App\Http\Controllers\Manage;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ManageController extends Controller
{
    public function index(){


        return view('manage.index');
    }



    public function department(){



        return view('manage.department');
    }
    public function addDepartment(){

        //{id:"1",bmname:"产品研发部",status:"1",start_time:"2",num:"3"},
        $data = array('id'=>2,'bmname'=>'ddd','status'=>333,'start_time'=>222,'num'=>444);
        echo  json_encode($data);
    }



}
