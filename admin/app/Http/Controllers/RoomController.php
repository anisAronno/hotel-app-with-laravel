<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\RoomModel;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    
    public function index()
    {
        return view('admin.rooms');
    }

  
    public function getRoomData()
    {
        $results = json_decode(RoomModel::orderBy('id', 'desc')->get());
        
        return $results;

    }

    
    public function RoomAdd(Request $req)
    {

        $RoomTitle = $req->input("RoomTitle");
        $RoomPrice = $req->input("RoomPrice");
        $RoomLenght = $req->input("RoomLenght");
        $RoomView = $req->input("RoomView");
        $RoomAdults = $req->input("RoomAdults");
        $RoomChildren = $req->input("RoomChildren");
        $RoomBed = $req->input("RoomBed");
      
            try {
                $result = RoomModel::insert([

                    'title' => $RoomTitle,
                    'price' => $RoomPrice,
                    'length' => $RoomLenght,
                    'view' => $RoomView,
                    'adult' => $RoomAdults,
                    'children' => $RoomChildren,
                    'bed' => $RoomBed,
                    
                ]);
            } catch (\Throwable $th) {
              return response()->json(array('error'=>$th));
            }

       
        if ($result == true) {
            return 1;
        } else {
            return 0;
        }
    }



    function RoomDelete(Request $req)
        {
            $id = $req->input('id');
            $result = RoomModel::where('id', '=', $id)->delete();
            if ($result == true) {
                return 1;
            } else {
                return 0;
            }
        }
       



        function RoomEdit(Request $req)
        {
            $id = $req->input('id');
            $result = json_encode(RoomModel::where('id', '=', $id)->get());
            return $result;
        }




        function RoomUpdate(Request $req)
        {
    
            $id = $req->input("id");
            $RoomTitleIdUpdate = $req->input("RoomTitleIdUpdate");
            $RoomPriceIdUpdate = $req->input("RoomPriceIdUpdate");
            $RoomLenghtIdUpdate = $req->input("RoomLenghtIdUpdate");
            $RoomViewIdUpdate = $req->input("RoomViewIdUpdate");
            $RoomAdultsIdUpdate = $req->input("RoomAdultsIdUpdate");
            $RoomChildrenIdUpdate = $req->input("RoomChildrenIdUpdate");
            $RoomBedIdUpdate = $req->input("RoomBedIdUpdate");

                $result = RoomModel::where('id', '=', $id)->update(['title' => $RoomTitleIdUpdate,'price' => $RoomPriceIdUpdate, 'length' => $RoomLenghtIdUpdate, 'view' => $RoomViewIdUpdate, 'adult' => $RoomAdultsIdUpdate, 'children' => $RoomChildrenIdUpdate, 'bed' => $RoomBedIdUpdate]);
                if ($result == true) {
                    return 1;
                } else {
                    return 0;
                }

    
    
        }








}


