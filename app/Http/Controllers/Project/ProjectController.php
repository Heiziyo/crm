<?php

namespace App\Http\Controllers\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OSS\OssClient;
use OSS\Core\OssException;
class ProjectController extends Controller
{
    public function index(){





        return view('project.index');
    }

    /**
     * 上传设计稿
     */
    function addDesign(){


        try {
            $ossClient = new OssClient(env('ALIOSS_ACCESSKEYID', ''), env('ALIOSS_ACCESSKEYSECRET', ''), env('ALIOSS_ENDPOINT', ''));
        } catch (OssException $e) {
            print $e->getMessage();
        }
        return view('project.adddesign');

    }
}
