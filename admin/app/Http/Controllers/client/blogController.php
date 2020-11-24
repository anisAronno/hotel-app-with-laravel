<?php

namespace App\Http\Controllers\client;

use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomModel;

class blogController extends Controller
{
    public function blogIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        $rooms=RoomModel::all();
        return view('client.blog',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'rooms'=>$rooms,
            'facilities'=> $facilities
        ]);
    }
}
