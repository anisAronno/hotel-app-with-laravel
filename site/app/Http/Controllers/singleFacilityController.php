<?php

namespace App\Http\Controllers;

use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;

class singleFacilityController extends Controller
{
    public function singleFacilityIndex($facilityId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());

        if($facilityId==0){
            return view('Transport-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($facilityId==1){
            return view('gym-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }elseif($facilityId==2){
            return view('travel-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }else{
            return view('common-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData
            ]);
        }


       
    }
}
