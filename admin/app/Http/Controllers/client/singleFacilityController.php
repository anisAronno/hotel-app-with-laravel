<?php

namespace App\Http\Controllers\client;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class singleFacilityController extends Controller
{
    public function singleFacilityIndex($facilityId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());

        if($facilityId==0){
            return view('client.Transport-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($facilityId==1){
            return view('client.gym-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($facilityId==2){
            return view('client.travel-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }else{
            return view('client.common-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }



    }
}
