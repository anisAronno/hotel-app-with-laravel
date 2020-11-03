<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function blogIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('blog',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
