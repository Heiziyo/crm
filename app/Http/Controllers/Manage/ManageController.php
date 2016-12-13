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
        $opt = $_POST['oper'];
        if ( $opt== 'add'){

        }else if($opt == "edit"){

        }else if($opt == "del"){

        }
       dd("Go OUT");
    }

}
