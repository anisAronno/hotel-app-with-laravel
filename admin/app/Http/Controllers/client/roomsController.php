<?php

namespace App\Http\Controllers\client;

use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use App\Http\Controllers\Controller;

class roomsController extends Controller
{
    public function roomIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        return view('client.rooms',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'facilities'=> $facilities
        ]);
    }
}
