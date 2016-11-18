<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index(){





        return view('project.index');
    }

    /**
     * 上传设计稿
     */
    function addDesign(){


        return view('project.adddesign');

    }
}
