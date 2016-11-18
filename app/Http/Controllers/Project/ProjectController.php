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

        return config('app.oss_accesskeyid');
        try {
            $ossClient = new OssClient(config('app.oss_accesskeyid'),config('app.oss_accesskeysecret') ,config('app.oss_endpoint') );
        } catch (OssException $e) {
            print $e->getMessage();
        }
        return view('project.adddesign');

    }
}
