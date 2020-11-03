<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class singleBlogeController extends Controller
{
    public function singleBlogIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('single-blog',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
