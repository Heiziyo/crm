<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*
 * 课程体系
 */

class CourseController extends Controller
{
    public function index(){


        return view('Course.index');
    }
}
