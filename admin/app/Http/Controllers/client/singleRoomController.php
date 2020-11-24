<?php

namespace App\Http\Controllers\client;

use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RoomFacilityModel;
use App\RoomImageModel;
use App\RoomModel;

class singleRoomController extends Controller
{
    public function singleRoomIndex($roomId){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        $rooms=RoomModel::all();
        $roomdetails=RoomModel::where('id',$roomId)->first();
        
        $roomsImages=RoomImageModel::leftjoin('room','roomimages.room_id','=','room.id')
        ->where('room_id','=',$roomId)->get();
        $roomsfacilitybathroom=RoomFacilityModel::leftjoin('room','roomfacilities.room_id','=','room.id')
        ->where('room_id','=',$roomId)
        ->where('category_id','=',1)
        ->select('roomfacilities.title')
        ->get();


        $roomsfacilityroom=RoomFacilityModel::leftjoin('room','roomfacilities.room_id','=','room.id')
        ->where('room_id','=',$roomId)
        ->where('category_id','=',2)
        ->select('roomfacilities.title')
        ->get();
        
        
                return view('client.single-room',[
                'othersData'=>$othersData,
                'socialData'=>$socialData,
                'rooms'=>$rooms,
                'roomdetails'=>$roomdetails,
                'roomsImages'=>$roomsImages,
                'roomsfacilitybathroom'=>$roomsfacilitybathroom,
                'roomsfacilityroom'=>$roomsfacilityroom,
                'facilities'=> $facilities
            ]);

    }

}
