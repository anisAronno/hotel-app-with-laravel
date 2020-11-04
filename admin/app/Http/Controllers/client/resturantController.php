<?php

namespace App\Http\Controllers\client;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class resturantController extends Controller
{
    public function resturantIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        return view('client.resturant',[
            'othersData'=>$othersData,
            'socialData'=>$socialData
        ]);
    }
}
