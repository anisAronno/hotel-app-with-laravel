<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;


class roomsController extends Controller
{
    public function roomIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('rooms',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
