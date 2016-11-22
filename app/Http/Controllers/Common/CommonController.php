<?php

namespace App\Http\Controllers\Common;

use App\Model\UpInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function upInfo(Request $request){

        if (strtolower($request->method()) == 'post'){
            $upmodel = new UpInfo();
            $infos['area'] = $request->input('area');
            $infos['role'] = $request->input('role');
            $infos['userid'] = $request->input('userid');
            dd($upmodel->upinfos($infos));
            if ($upmodel->upinfos($infos)){

            }
        }
        return view('public.upinfo');
    }
}
