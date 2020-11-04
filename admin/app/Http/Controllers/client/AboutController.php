<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('client.About',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
