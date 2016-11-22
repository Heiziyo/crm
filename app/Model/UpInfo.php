<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpInfo extends Model
{
    protected  $table = "user";
    protected $fillable = [
        'userid', 'area', 'role',
    ];



    public function upinfos($infos){
        $result = DB::update('update users set area = ?,role = ? where id = ?', [$infos['area'],$infos['role'],$infos['userid']]);
        return $result;
    }
}
