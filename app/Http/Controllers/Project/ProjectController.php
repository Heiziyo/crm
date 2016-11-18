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
            $ossClient = new OssClient('Wc7HoLLuXHV2tq2O', 'lwIuKtYe8ffBCF0KTtZ5we8R6RSkuf', 'http://oss-cn-shanghai.aliyuncs.com');
        } catch (OssException $e) {
            print $e->getMessage();
        }
        return view('project.adddesign');

    }
}
