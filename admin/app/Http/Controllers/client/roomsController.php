<?php

namespace App\Http\Controllers\client;

use App\FacilitiesModel;
use App\OthersModel;
use App\SocialModel;
use App\Http\Controllers\Controller;
use App\RoomModel;
use Illuminate\Support\Facades\DB;

class roomsController extends Controller
{
    public function roomIndex(){
        $othersData= json_decode(OthersModel::orderBy('id', 'desc')->get()->first());
        $socialData= json_decode(SocialModel::orderBy('id', 'desc')->get()->first());
        $facilities= json_decode(FacilitiesModel::all());
        $rooms=RoomModel::all();
        
        $sql="SELECT 
        room.id,
        room.title,
        room.price,
        room.length,
        roomimages.images,
        roomimages.room_id
        FROM
            room
                LEFT JOIN
            (SELECT 
                *
            FROM
                roomimages
            ) as roomImages ON roomimages.room_id = room.id group by room.title";

    $data=DB::select($sql);

        return view('client.rooms',[
            'othersData'=>$othersData,
            'socialData'=>$socialData,
            'facilities'=> $facilities,
            'rooms'=>$rooms,
            'data'=>$data,
        ]);
    }
}
