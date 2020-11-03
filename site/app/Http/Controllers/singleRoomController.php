<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class singleRoomController extends Controller
{
    public function singleRoomIndex($roomId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        if($roomId==0){
            return view('single-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==1){
            return view('double-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==2){
            return view('twin-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($roomId==3){
            return view('executive-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }else{
            return view('family-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }
       
    }
    
}
