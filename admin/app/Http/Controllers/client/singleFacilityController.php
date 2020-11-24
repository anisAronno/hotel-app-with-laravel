<?php

namespace App\Http\Controllers\client;

use App\FacilitesImageModel;
use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomModel;
use Illuminate\Support\Facades\DB;

class singleFacilityController extends Controller
{
    public function singleFacilityIndex($facilityId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());

        $facilities= json_decode(FacilitiesModel::all());
        $rooms=RoomModel::all();

        $facilitiesData=  DB::table('facilities')
        ->select('facilities.id','facilities.title','facilities.description','facilities.sub_title','facilities_image.image','facilities.page_title')
        ->leftjoin('facilities_image','facilities_image.id','=','facilities.image_id')
        ->where('facilities.id','=',$facilityId)
        ->get();

        $sql="SELECT *FROM facilities LEFT JOIN facilities_image ON facilities.id = facilities_image.page_name
        where facilities.id =$facilityId";
        $facilitiesDataImages=DB::select($sql);
        
        
            return view('client.gym-facility',[
                'othersData'=>$othersData,
                'socialData'=>$socialData,
                'facilities'=> $facilities,
                'facilitiesData'=> $facilitiesData,
                'rooms'=>$rooms,
                'facilitiesDataImages'=> $facilitiesDataImages
            ]);
        



    }
}
