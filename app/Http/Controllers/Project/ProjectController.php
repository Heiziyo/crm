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

        $ossClient  = new OssClient();
        try {
            $ossClient = new OssClient(ALIOSS_ACCESSKEYID, ALIOSS_ACCESSKEYSECRET, ALIOSS_ENDPOINT);
        } catch (OssException $e) {
            print $e->getMessage();
        }
        return view('project.adddesign');

    }
}
