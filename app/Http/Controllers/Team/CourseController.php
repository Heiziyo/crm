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


        return view('course.index');
    }

    /*
     * 前端课程
     */
    public function webCourse(){


        return view('course.webcourse');
    }

    /*
     *设计课程
     */
    public function designCourse(){


        return view('course.designcourse');
    }
    /*
     *后端课程
     */
    public function backCourse(){


        return view('course.backcourse');
    }
}
