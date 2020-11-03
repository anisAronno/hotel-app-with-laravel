<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class resturantController extends Controller
{
    public function resturantIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('resturant',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
