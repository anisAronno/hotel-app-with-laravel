<?php

namespace App\Http\Controllers\client;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class singleRoomController extends Controller
{
    public function singleRoomIndex($roomId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        if($roomId==0){
            return view('client.single-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==1){
            return view('client.double-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==2){
            return view('client.twin-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==3){
            return view('client.executive-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }else{
            return view('client.family-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }

    }

}
